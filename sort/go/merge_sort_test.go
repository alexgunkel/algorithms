// merge_sort_test.go
package sort

import (
	"testing"
	"github.com/stretchr/testify/assert"
)

func TestMergeSort(testing *testing.T) {
	content, _ := readLines("./data/random10")
	merge_sort(&content)

	for key, number := range content {
		if key > 0 {
			compare := content[key-1]
			assert.Truef(testing, compare < number, "Asssert that %d is greater then %d", number, compare)
		}
	}
}
