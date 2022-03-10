/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class EvilAutocorrect {

    private static String YOURCLIENT = "your client";
    private static List<Character> POINTS;
    static {
        POINTS = new ArrayList<>();
        POINTS.add('.');
        POINTS.add(',');
        POINTS.add('?');
        POINTS.add('!');
    }

    public static void main(String[] args) {
        System.out.println( autocorrect("We have sent the deliverables to you.") );
	}

    /**
     * Transform all words 'you' to 'your client'.
     */
    public static String autocorrect(String input) {
        String result = "";
        String[] words = input.split(" ");

        for ( String word : words ) {
            if ( "u".equals( word.toLowerCase() ) || "you".equals( word.toLowerCase() ) ) {
                result += YOURCLIENT;
            } else if ( word.length() == 3 && "you".equals( word.substring(0, 3).toLowerCase() ) && POINTS.contains( word.substring(-1,1).toCharArray()[0] ) ) {
                String last = word.substring(-1,1);

                result += YOURCLIENT+last;
            } else if ( word.length() > 2 && "you".equals( word.substring(0, 3).toLowerCase() ) && checkU( word.substring(3) ) ) {
                result += YOURCLIENT;

                char last = word.charAt( word.length()-1 );
                if ( POINTS.contains( last ) ) {
                    result += last;
                }
            } else {
                result += word;
            }
            result += " ";
        }

        return result.trim();
    }

    private static boolean checkU(String word) {
        String[] all = word.split("");
    
        for ( int i=0; i < all.length; i++ ) {
            char letter = all[i].charAt(0);

            if ( 'u' == letter || all.length-1==i && POINTS.contains( letter ) ) {
                //return true;
            } else {
                return false;
            }
        }

        return true;
    }
}
