/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"time"
)

var DAYS = []string{"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"}

/**
 * List form of most frequent days in order.
 */
func mostFrequentDays(year int) []string {
	var result []string

	startDay := int(time.Date(year, time.January, 1, 0, 0, 0, 0, time.UTC).Weekday())
	result = append(result, DAYS[startDay])

	if (year%4 == 0 && year%100 != 0) || year%400 == 0 {
		result = append(result, DAYS[startDay+1])
	}

	if len(result) > 1 {
		if result[0] == "Sunday" && result[1] == "Monday" {
			result[0] = "Monday"
			result[1] = "Sunday"
		}
	}

	return result
}
