/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class MostFrequentDaysTest {
    
    @Test
	public void testMostFrequentDays() throws Exception {
		//Test 1
		String[] want = {"Friday"};
		String[] got = MostFrequentDays.mostFrequentDays( 2427 );
        assertArrayEquals(want, got);
		//Test 2
		want = new String[] {"Saturday"};
		got = MostFrequentDays.mostFrequentDays( 2185 );
        assertArrayEquals(want, got);
		//Test 3
		want = new String[] {"Tuesday", "Wednesday"};
		got = MostFrequentDays.mostFrequentDays( 1084 );
        assertArrayEquals(want, got);
		//Test 4
		want = new String[] {"Sunday"};
		got = MostFrequentDays.mostFrequentDays( 1167 );
        assertArrayEquals(want, got);
		//Test 5
		want = new String[] {"Friday", "Saturday"};
		got = MostFrequentDays.mostFrequentDays( 1216 );
        assertArrayEquals(want, got);
		//Test 6
		want = new String[] {"Friday", "Saturday"};
		got = MostFrequentDays.mostFrequentDays( 1492 );
        assertArrayEquals(want, got);
		//Test 7
		want = new String[] {"Monday"};
		got = MostFrequentDays.mostFrequentDays( 1770 );
        assertArrayEquals(want, got);
		//Test 8
		want = new String[] {"Saturday"};
		got = MostFrequentDays.mostFrequentDays( 1785 );
        assertArrayEquals(want, got);
		//Test 9
		want = new String[] {"Wednesday", "Thursday"};
		got = MostFrequentDays.mostFrequentDays( 212 );
        assertArrayEquals(want, got);
	}

}
