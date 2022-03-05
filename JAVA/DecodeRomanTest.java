/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DecodeRomanTest {
        
    @Test
	public void testDecodeRoman() throws Exception {
		//Test 1
		int want = 1;
		int got = DecodeRoman.Decode("I");
        assertEquals(want, got);
		//Test 2
		want = 21;
		got = DecodeRoman.Decode("XXI");
        assertEquals(want, got);
		//Test 3
		want = 4;
		got = DecodeRoman.Decode("IV");
        assertEquals(want, got);
		//Test 4
		want = 1666;
		got = DecodeRoman.Decode("MDCLXVI");
        assertEquals(want, got);
		//Test 5
		want = 2008;
		got = DecodeRoman.Decode("MMVIII");
        assertEquals(want, got);
	}
}
