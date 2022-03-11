<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+Decode( "XX" );

class DecodeRoman {

    /**
     * Receive a roman number and decode to a integer value.
     */
    function Decode( $roman ) : int {
        $result = 0;
        $roman = strtoupper( $roman );
    
        for ( $i = 0; $i < strlen( $roman )-1; $i++ ) {
            if ( $this->singleDecode( substr( $roman, $i, 1 ) ) < $this->singleDecode( substr( $roman, $i+1, 1 ) ) ) {
                $result -= $this->singleDecode( substr( $roman, $i, 1 ) );
            } else {
                $result += $this->singleDecode( substr( $roman, $i, 1 ) );
            }
        }
        $result += $this->singleDecode(substr( $roman, strlen( $roman )-1, 1 ));
    
        return $result;
    }

    function singleDecode( $letter ) : int {
        $result = 0;
    
        switch ($letter) {
        case 'M':
            $result = 1000;
            break;
        case 'D':
            $result = 500;
            break;
        case 'C':
            $result = 100;
            break;
        case 'L':
            $result = 50;
            break;
        case 'X':
            $result = 10;
            break;
        case 'V':
            $result = 5;
            break;
        case 'I':
            $result = 1;
            break;
        }
    
        return $result;
    }

}
