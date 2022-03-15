/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class SortCsvColumns {

    public static void main(String[] args) {
        System.out.println( OrderByName("Beth,Charles,Danielle,Adam,Eric\n17945,10091,10088,3907,10132\n2,12,13,48,11") );
	}

    /**
     * Reorder a table data into a raw value using column name as reference.
     */
    public static String OrderByName(String csv_data) {
        String result = "";
        
        try {
            String[] input = csv_data.split("\n"); //input
            List<String> cols = Arrays.asList( input[0].split(",") ); //columns names
            String[][] lines = new String[ input.length ][ cols.size() ];

            //save array columns inside array strings lines
            for ( int i=0; i < input.length; i++ ) {
                lines[i] = input[i].split(",");
             }

            //clone the first line to re-order
            List<String> clone = new ArrayList<String>(cols);
            Collections.sort( clone );

            //create the first line of output with columns names
            for ( int i=0; i < clone.size(); i++ ) {
                result += clone.get(i);
                result += ( i < clone.size()-1 ) ? "," : "\n";
            }

            //re-organize the values of columns for each line
            for ( int i=1; i < lines.length; i++ ) {
                String[] line = lines[i];
                for ( int x=0; x < clone.size(); x++ ) {
                    if ( cols.contains( clone.get(x) ) ) {
                        int p = cols.indexOf( clone.get(x) );

                        result += line[p];
                        result += ( x < clone.size()-1 ) ? "," : "\n";
                    }
                }
            }
        } catch (Exception e) {
            System.out.println("erro: "+e);
        }

        return result.trim();
    }
}
