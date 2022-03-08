/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
const TEST = require('tape')
const OBJ = require('./MostFrequentDays.js')

TEST('Starting MostFrequentDays test...', (t) => {
    //Test 1
    let want = ["Friday"]
    let got = OBJ.mostFrequentDays( 2427 )
    t.assert(want.toString === got.toString, "Expect: 2427 = Friday")
    //Test 2
    want = ["Saturday"]
    got = OBJ.mostFrequentDays( 2185 )
    t.assert(want.toString === got.toString, "Expect: 2185 = Saturday")
    //Test 3
    want = ["Tuesday", "Wednesday"]
    got = OBJ.mostFrequentDays( 1084 )
    t.assert(want.toString === got.toString, "Expect: 1084 = Tuesday, Wednesday")
    //Test 4
    want = ["Sunday"]
    got = OBJ.mostFrequentDays( 1167 )
    t.assert(want.toString === got.toString, "Expect: 1167 = Sunday")
    //Test 5
    want = ["Friday", "Saturday"]
    got = OBJ.mostFrequentDays( 1216 )
    t.assert(want.toString === got.toString, "Expect: 1216 = Friday, Saturday")
    //Test 6
    want = ["Friday", "Saturday"]
    got = OBJ.mostFrequentDays( 1492 )
    t.assert(want.toString === got.toString, "Expect: 1492 = Friday, Saturday")
    //Test 7
    want = ["Monday"]
    got = OBJ.mostFrequentDays( 1770 )
    t.assert(want.toString === got.toString, "Expect: 1770 = Monday")
    //Test 8
    want = ["Saturday"]
    got = OBJ.mostFrequentDays( 1785 )
    t.assert(want.toString === got.toString, "Expect: 1785 = Saturday")
    //Test 9
    want = ["Wednesday", "Thursday"]
    got = OBJ.mostFrequentDays( 212 )
    t.assert(want.toString === got.toString, "Expect: 212 = Wednesday, Thursday")

    t.end()
})
