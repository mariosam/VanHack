<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+possibilities( ".-" );

class MorseCode {

    static $MORSE = [
        ["." => "E"],
        ["-" => "T"],
        [".." => "I"],
        [".-" => "A"],
        ["-." => "N"],
        ["--" => "M"],
        ["..." => "S"],
        ["..-" => "U"],
        [".-." => "R"],
        [".--" => "W"],
        ["-.." => "D"],
        ["-.-" => "K"],
        ["--." => "G"],
        ["---" => "O"],
    ];

    /**
     * Return the ...
     */
    function possibilities( $signals ) {
        $results = array();

        recursiveMorse( $signals, 0, $results );

        return $results;
    }

    /**
     * 
     */
    function recursiveMorse( $signals, $position, $results ) {
        echo $signals." - ".$position;

        if (! str_contains($signals, '?') ) {
            array_push($results, $MORSE[$signals]);
            return;
        }

        if ( $position >= strlen($signals) ) {
            return;
        }

        if ( substr($signals, $position. 1) == '?' ) {
            recursiveMorse( $signals.substr(0, $position).".".$signals.substr($position+1), $position+1, $results );
            recursiveMorse( $signals.substr(0, $position)."-".$signals.substr($position+1), $position+1, $results );
        } else {
            recursiveMorse( $signals, $position+1, $results );
        }
    }

}
