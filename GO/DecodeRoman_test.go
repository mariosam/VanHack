/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import "testing"

func TestDecodeRoman(t *testing.T) {
	tables := []struct {
		roman string
		want  int
	}{
		{"I", 1},
		{"XXI", 21},
		{"IV", 4},
		{"MDCLXVI", 1666},
		{"MMVIII", 2008},
	}

	for _, table := range tables {
		got := Decode(table.roman)

		if got != table.want {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
