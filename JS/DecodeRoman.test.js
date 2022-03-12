/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
const TEST = require('tape')
const OBJ = require('./DecodeRoman.js')

TEST('Starting DecodeRoman test...', (t) => {
    //Test 1
    t.assert(OBJ.Decode("I") === 1, "Expect: I = 1")
    //Test 2
    t.assert(OBJ.Decode("XXI") === 21, "Expect: XXI = 21")
    //Test 3
    t.assert(OBJ.Decode("IV") === 4, "Expect: IV = 4")
    //Test 4
    t.assert(OBJ.Decode("MDCLXVI") === 1666, "Expect: MDCLXVI = 1666")
    //Test 5
    t.assert(OBJ.Decode("MMVIII") === 2008, "Expect: MMVIII = 2008")

    t.end()
})
