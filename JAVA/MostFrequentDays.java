/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.time.LocalDate;
import java.time.Month;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class MostFrequentDays {

    public static String[] DAYS = {"Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"};
    
    public static void main(String[] args) {
        System.out.println( mostFrequentDays(2427) );
    }

    /**
     * List form of most frequent days in order.
     */
    public static String[] mostFrequentDays(int year) {
        List<String> result = new ArrayList<String>();

        int startDay = LocalDate.of(year, Month.JANUARY, 1).getDayOfWeek().ordinal()+1;
        result.add( DAYS[startDay] );

        if ( (year % 4 == 0 && year % 100 != 0) || year % 400 == 0 ) {
            result.add( DAYS[startDay+1] );
        }
    
        if ( result.size() > 1 ) {
            if ( "Sunday".equals( result.get(0) ) && "Monday".equals( result.get(1) ) ) {
                Collections.reverse( result );
            }
        }

        return result.toArray(new String[0]);
    }
}
