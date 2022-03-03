/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

/**
 * Receive a roman number and decode to a integer value.
 */
func Decode(roman string) int {
	var result int = 0
	roman = strings.ToUpper(roman)

	for i := 0; i < len(roman)-1; i++ {
		if singleDecode(roman[i]) < singleDecode(roman[i+1]) {
			result -= singleDecode(roman[i])
		} else {
			result += singleDecode(roman[i])
		}
	}
	result += singleDecode(roman[len(roman)-1])

	return result
}

func singleDecode(letter byte) int {
	var result int = 0

	switch letter {
	case 'M':
		result = 1000
	case 'D':
		result = 500
	case 'C':
		result = 100
	case 'L':
		result = 50
	case 'X':
		result = 10
	case 'V':
		result = 5
	case 'I':
		result = 1
	}

	return result
}
