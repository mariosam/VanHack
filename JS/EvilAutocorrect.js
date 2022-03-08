/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("Result is "+autocorrect("youtube"));

const YOURCLIENT = "your client";
const POINTS = ['.',',','?','!'];

/**
 * Transform all words 'you' to 'your client'.
 */
function autocorrect(input) {
    let result = "";
    let words = input.split(" ");

    words.forEach(function(word, i, array) {
        if ( "u" === word.toLowerCase() || "you" === word.toLowerCase() ) {
            result += YOURCLIENT;
        } else if ( word.length === 4 && "you" === word.substr(0,3).toLowerCase() && POINTS.includes( word.substr(-1,1) ) ) {
            let last = word.substr(-1,1);

            result += YOURCLIENT+last;
        } else if ( word.length > 2 && "you" === word.substr(0,3).toLowerCase() && checkU( word.substr(3) ) ) {
            result += YOURCLIENT;

            let last = word.substr(-1,1);
            if ( POINTS.includes( last ) ) {
                result += last;
            }
        } else {
            result += word;
        }
        result += " ";
    });

    return result.trim();
}

function checkU(word) {
    let all = word.split("");

    for ( let i=0; i < all.length; i++ ) {
        let letter = all[i].charAt(0);

        if ( "u" === letter || all.length-1==i && POINTS.includes( letter ) ) {
            //return true;
        } else {
            return false;
        }
    }

    return true;
}
module.exports = {autocorrect}
