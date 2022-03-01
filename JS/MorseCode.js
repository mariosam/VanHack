/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("Result is "+possibilities(".-"));

const MORSE = new Map([
    [".", "E"],
    ["-", "T"],
    ["..", "I"],
    [".-", "A"],
    ["-.", "N"],
    ["--", "M"],
    ["...", "S"],
    ["..-", "U"],
    [".-.", "R"],
    [".--", "W"],
    ["-..", "D"],
    ["-.-", "K"],
    ["--.", "G"],
    ["---", "O"],
]);

/**
 * Identify the letters of morse signals.
 */
function possibilities( signals ) {
    results = new Array();
    recursiveMorse( signals, 0, results );
    return results;
}

/**
 * Check the signal.
 */
function recursiveMorse( signals, position, results ) {
    //if we have a valid signal
    if (! signals.includes("?") ) {
        results[ position ] = MORSE.get( signals );
        return;
    }
    //out of box: invalid
    if ( position >= signals.length ) {
        return;
    }
    //unknowing signal: use recursivity to read again
    if ( signals.charAt(position) == '?' ) {
        recursiveMorse(signals.substring(0, position) + "." + signals.substring(position + 1), position + 1, results);
        recursiveMorse(signals.substring(0, position) + "-" + signals.substring(position + 1), position + 1, results);
    } else {
        recursiveMorse(signals, position + 1, results);
    }
}

module.exports = {possibilities}
