<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+autocorrect( "We have sent the deliverables to you." );

class EvilAutocorrect {

    const YOURCLIENT = "your client";
    const POINTS = ['.',',','?','!'];

    /**
     * Transform all words 'you' to 'your client'.
     */
    function autocorrect( $input ) {
        $result = "";
        $words = explode(" ", $input);

        foreach ( $words as &$word ) {
            if ( "u" == strtolower( $word ) || "you" == strtolower( $word ) ) {
                $result .= self::YOURCLIENT;
            } else if ( strlen( $word ) == 3 && "you" == strtolower( substr($word, 0, 3) ) && in_array( substr($word,-1,1), self::POINTS ) ) {
                $last = substr($word,-1,1);

                $result .= self::YOURCLIENT . $last;
            } else if ( strlen( $word ) > 2 && "you" == strtolower( substr($word, 0, 3) ) && $this->checkU( substr($word, 3) ) ) {
                $result .= self::YOURCLIENT;

                $last = $word[ strlen( $word )-1 ];
                if ( in_array( $last, self::POINTS ) ) {
                    $result .= $last;
                }
            } else {
                $result .= $word;
            }
            $result .= " ";
        }

        return trim( $result );
    }

    function checkU( $word ) {
        $all = str_split( $word );
    
        for ( $i=0; $i < count( $all ); $i++ ) {
            $letter = $all[$i];
    
            if ( "u" == $letter || count( $all )-1 == $i && in_array( $letter, self::POINTS ) ) {
                //return true;
            } else {
                return false;
            }
        }
    
        return true;
    }

}
