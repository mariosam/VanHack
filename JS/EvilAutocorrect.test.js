/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
const TEST = require('tape')
const OBJ = require('./EvilAutocorrect.js')

TEST('Starting EvilAutocorrect test...', (t) => {
    //Test 1
    t.assert(OBJ.autocorrect("We have sent the deliverables to you.") === "We have sent the deliverables to your client.", "Expect: 1 = We have sent the deliverables to your client.")
    //Test 2
    t.assert(OBJ.autocorrect("Our team is excited to finish this with you.") === "Our team is excited to finish this with your client.", "Expect: 2 = Our team is excited to finish this with your client.")
    //Test 3
    t.assert(OBJ.autocorrect("youtube") === "youtube", "Expect: 3 = youtube")
    //Test 4
    t.assert(OBJ.autocorrect("I love youuuuu!") === "I love your client!", "Expect: 4 = I love your client!")
    //Test 5
    t.assert(OBJ.autocorrect("Me and youu forever") === "Me and your client forever", "Expect: 5 = Me and your client forever")
    //Test 6
    t.assert(OBJ.autocorrect("You can do it!") === "your client can do it!", "Expect: 6 = your client can do it!")

    t.end()
})
