/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

const YOURCLIENT = "your client"

var POINTS = []string{".", ",", "?", "!"}

/**
 * Transform all words 'you' to 'your client'.
 */
func autocorrect(input string) string {
	var result string = ""
	words := strings.Split(input, " ")

	for _, word := range words {
		if strings.ToLower(word) == "u" || strings.ToLower(word) == "you" {
			result += YOURCLIENT
		} else if len(word) == 3 && strings.ToLower(string(word[0:3])) == "you" && in_array(POINTS, string(word[len(word)-1])) {
			last := string(word[len(word)-1])

			result += YOURCLIENT + last
		} else if len(word) > 2 && strings.ToLower(string(word[0:3])) == "you" && checkU(string(word[3])) {
			result += YOURCLIENT

			last := string(word[len(word)-1])
			if in_array(POINTS, last) {
				result += last
			}
		} else {
			result += word
		}
		result += " "
	}

	return strings.TrimSpace(result)
}

func checkU(word string) bool {
	all := strings.Split(word, "")

	for i, letter := range all {
		if letter == "u" || len(all)-1 == i && in_array(POINTS, letter) {
			//return true;
		} else {
			return false
		}
	}

	return true
}

func in_array(data []string, el string) bool {
	for _, v := range data {
		if v == el {
			return true
		}
	}

	return false
}
