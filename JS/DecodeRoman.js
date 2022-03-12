/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("Result is "+Decode("XX"));

/**
 * Receive a roman number and decode to a integer value.
 */
function Decode(roman) {
    let result = 0;
    roman = roman.toUpperCase();

    for ( let i = 0; i < roman.length-1; i++ ) {
        if ( singleDecode(roman.charAt(i)) < singleDecode(roman.charAt(i+1)) ) {
            result -= singleDecode(roman.charAt(i));
        } else {
            result += singleDecode(roman.charAt(i));
        }
    }
    result += singleDecode(roman.charAt(roman.length-1));

    return result;
}

function singleDecode(letter) {
    let result = 0;

    switch (letter) {
    case 'M':
        result = 1000;
        break;
    case 'D':
        result = 500;
        break;
    case 'C':
        result = 100;
        break;
    case 'L':
        result = 50;
        break;
    case 'X':
        result = 10;
        break;
    case 'V':
        result = 5;
        break;
    case 'I':
        result = 1;
        break;
    }

    return result;
}
module.exports = {Decode}
