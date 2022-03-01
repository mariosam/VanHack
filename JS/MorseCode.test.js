/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
 const TEST = require('tape')
 const OBJ = require('./MorseCode.js')
 
 TEST('Starting MorseCode test...', (t) => {
     //Test 1
     let want = ["E"]
     let got = OBJ.possibilities( "." )
     t.assert(want.toString === got.toString, "Expect: . = E")
     //Test 2
     want = ["A"]
     got = OBJ.possibilities( ".-" )
     t.assert(want.toString === got.toString, "Expect: .- = A")
     //Test 3
     want = ["E","T"]
     got = OBJ.possibilities( "?" )
     t.assert(want.toString === got.toString, "Expect: ? = E T")
     //Test 4
     want = ["I","N"]
     got = OBJ.possibilities( "?." )
     t.assert(want.toString === got.toString, "Expect: ?. = I N")
     //Test 5
     want = ["I","A"]
     got = OBJ.possibilities( ".?" )
     t.assert(want.toString === got.toString, "Expect: .? = I A")
 
     t.end()
 })
 
