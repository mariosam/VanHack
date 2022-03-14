/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"sort"
	"strings"
)

/**
 * Reorder a table data into a raw value using column name as reference.
 */
func OrderByName(csvData string) string {
	var result string = ""

	input := strings.Split(csvData, "\n")
	cols := strings.Split(input[0], ",")
	var lines [][]string

	//save array columns inside array strings lines
	for i := 0; i < len(input); i++ {
		lines = append(lines, strings.Split(input[i], ","))
	}

	//clone the first line to re-order
	clone := cols
	sort.Strings(clone)
	//force to keep the original order after sort reference
	cols = strings.Split(input[0], ",")

	//create the first line of output with columns names
	for i := 0; i < len(clone); i++ {
		result += clone[i]

		if i < len(clone)-1 {
			result += ","
		} else {
			result += "\n"
		}
	}

	//re-organize the values of columns for each line
	for i := 1; i < len(lines); i++ {
		line := lines[i]

		for x := 0; x < len(clone); x++ {
			if contains(cols, clone[x]) {
				p := indexOf(cols, clone[x])
				result += line[p]

				if x < len(clone)-1 {
					result += ","
				} else {
					result += "\n"
				}
			}
		}
	}

	//to remove the last \n
	return result[:len(result)-1]
}

func contains(data []string, el string) bool {
	for _, v := range data {
		if v == el {
			return true
		}
	}

	return false
}

func indexOf(data []string, el string) int {
	for i, v := range data {
		if v == el {
			return i
		}
	}

	return -1
}
