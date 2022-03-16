/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("Result is "+OrderByName("Beth,Charles,Danielle,Adam,Eric\n17945,10091,10088,3907,10132\n2,12,13,48,11"));

/**
 * Reorder a table data into a raw value using column name as reference.
 */
function OrderByName(csv_data) {
    let result = "";
        
    try {
        let input = csv_data.split("\n"); //input
        let cols = input[0].split(","); //columns names
        let lines = [];

        //save array columns inside array strings lines
        for ( let i=0; i < input.length; i++ ) {
            lines.push( input[i].split(",") );
         }

        //clone the first line to re-order
        let clone = cols;
        clone.sort();
        //force to keep the original order after sort reference
        cols = input[0].split(",");

        //create the first line of output with columns names
        for ( let i=0; i < clone.length; i++ ) {
            result += clone[i];
            result += ( i < clone.length-1 ) ? "," : "\n";
        }

        //re-organize the values of columns for each line
        for ( let i=1; i < lines.length; i++ ) {
            let line = lines[i];
            for ( let x=0; x < clone.length; x++ ) {
                if ( cols.includes( clone[x] ) ) {
                    p = cols.indexOf( clone[x] );

                    result += line[p];
                    result += ( x < clone.length-1 ) ? "," : "\n";
                }
            }
        }
    } catch (e) {
        console.log("Erro: "+e);
    } finally {
        //console.log("resultado: "+result);
    }

    return result.trim();
}
module.exports = {OrderByName}
