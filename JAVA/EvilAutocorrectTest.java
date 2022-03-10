/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class EvilAutocorrectTest {

	@Test
	public void testEvilAutocorrect() throws Exception {
		//Test 1
		String want = "We have sent the deliverables to your client.";
		String got = EvilAutocorrect.autocorrect("We have sent the deliverables to you.");
		assertEquals(want, got);
        //Test 2
        want = "Our team is excited to finish this with your client.";
        got = EvilAutocorrect.autocorrect("Our team is excited to finish this with you.");
		assertEquals(want, got);
        //Test 3
        want = "youtube";
        got = EvilAutocorrect.autocorrect("youtube");
		assertEquals(want, got);
        //Test 4
        want = "I love your client!";
        got = EvilAutocorrect.autocorrect("I love youuuuu!");
		assertEquals(want, got);
        //Test 5
        want = "Me and your client forever";
        got = EvilAutocorrect.autocorrect("Me and youu forever");
		assertEquals(want, got);
        //Test 6
        want = "your client can do it!";
        got = EvilAutocorrect.autocorrect("You can do it!");
		assertEquals(want, got);
	}

}
