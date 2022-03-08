/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("Result is "+mostFrequentDays(2022));

let DAYS = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

/**
 * List form of most frequent days in order.
 */
function mostFrequentDays( year ) {
    let result = [];

    let startDay = new Date(year, 0, 1).getDay();
    result.push( DAYS[startDay] );

    if ( (year % 4 == 0 && year % 100 != 0) || year % 400 == 0 ) {
        result.push( DAYS[startDay+1] );
    }
   
    if ( result.length > 1 ) {
        if ( result[0] === "Sunday" && result[1] === "Monday" ) {
            result.reverse();
        }
    }

    return result;
}
module.exports = {mostFrequentDays}
