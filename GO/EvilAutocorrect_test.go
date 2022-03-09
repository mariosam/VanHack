/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import "testing"

func TestEvilAutocorrect(t *testing.T) {
	tables := []struct {
		input string
		want  string
	}{
		{"We have sent the deliverables to you.", "We have sent the deliverables to your client."},
		{"Our team is excited to finish this with you.", "Our team is excited to finish this with your client."},
		{"youtube", "youtube"},
		{"I love youuuuu!", "I love your client!"},
		{"Me and youu forever", "Me and your client forever"},
		{"You can do it!", "your client can do it!"},
	}

	for _, table := range tables {
		got := autocorrect(table.input)

		if got != table.want {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
