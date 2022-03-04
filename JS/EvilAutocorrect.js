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
        if ( word.toLowerCase() === "u" || word.toLowerCase() === "you" ) {
            result += YOURCLIENT;
        } else if ( word.substr(0,3).toLowerCase() === "you" && word.length === 4 && POINTS.includes( word.substr(-1,1) ) ) {
            let last = word.substr(-1,1);

            result += YOURCLIENT+last;
        } else if ( word.substr(0,3).toLowerCase() === "you" && checkU( word.substr(3) ) ) {
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

    for ( let letter of all ) {
        if ( letter === "u" || all.last && POINTS.includes( letter ) ) {
            return true;
        } else {
            return false;
        }
    }
}
module.exports = {autocorrect}
