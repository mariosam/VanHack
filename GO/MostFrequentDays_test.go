/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMostFrequentDays(t *testing.T) {
	tables := []struct {
		year int
		want []string
	}{
		{2427, []string{"Friday"}},
		{2185, []string{"Saturday"}},
		{1084, []string{"Tuesday", "Wednesday"}},
		{1167, []string{"Sunday"}},
		{1216, []string{"Friday", "Saturday"}},
		{1492, []string{"Friday", "Saturday"}},
		{1770, []string{"Monday"}},
		{1785, []string{"Saturday"}},
		{212, []string{"Wednesday", "Thursday"}},
	}

	for _, table := range tables {
		got := mostFrequentDays(table.year)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
