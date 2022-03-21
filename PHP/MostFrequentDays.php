<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+mostFrequentDays( 2022 );

class MostFrequentDays {

    const DAYS = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

    /**
     * List form of most frequent days in order.
     */
    public function mostFrequentDays( $year ) {
        $result = [];

        $day = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
        $startDay = date('w', strtotime($day));
        array_push($result, self::DAYS[$startDay]);
    
        if ( ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0 ) {
            array_push($result, self::DAYS[$startDay+1]);
        }
       
        if ( count($result) > 1 ) {
            if ( $result[0] == "Sunday" && $result[1] == "Monday" ) {
                array_reverse($result);
            }
        }
    
        return $result;
    }

}
