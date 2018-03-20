// merge_sort_test.go
package sort

import (
	"github.com/stretchr/testify/assert"
	"strconv"
	"testing"
)

func TestMergeSort(testing *testing.T) {
	content, _ := readLines("./data/random10")
	originalLength := len(content)
	MergeSort(&content)
	assert.Equal(testing, originalLength, len(content))

	for key, number := range content {
		if key > 0 {
			compare := content[key-1]
			assert.Truef(testing, compare < number, "Asssert that %d is greater then %d", number, compare)
		}
	}
}

var merge_result sortables

func benchmarkMergeSort(amount int64, b *testing.B) {
	file := "./data/random" + strconv.FormatInt(amount, 10)
	content, _ := readLines(file)
	var new_result sortables
	for n := 0; n < b.N; n++ {
		new_result = mergeSort(content)
	}

	merge_result = new_result
}

func BenchmarkMergeSort10(b *testing.B)     { benchmarkMergeSort(10, b) }
func BenchmarkMergeSort100(b *testing.B)    { benchmarkMergeSort(100, b) }
func BenchmarkMergeSort1000(b *testing.B)   { benchmarkMergeSort(1000, b) }
func BenchmarkMergeSort10000(b *testing.B)  { benchmarkMergeSort(10000, b) }
func BenchmarkMergeSort100000(b *testing.B) { benchmarkMergeSort(100000, b) }

func benchmarkMixedMergeSort(amount int64, b *testing.B) {
	file := "./data/random" + strconv.FormatInt(amount, 10)
	content, _ := readLines(file)
	var new_result sortables
	for n := 0; n < b.N; n++ {
		new_result = mergeSortMixed(content)
	}

	merge_result = new_result
}

func BenchmarkMixedMergeSort10(b *testing.B)     { benchmarkMixedMergeSort(10, b) }
func BenchmarkMixedMergeSort100(b *testing.B)    { benchmarkMixedMergeSort(100, b) }
func BenchmarkMixedMergeSort1000(b *testing.B)   { benchmarkMixedMergeSort(1000, b) }
func BenchmarkMixedMergeSort10000(b *testing.B)  { benchmarkMixedMergeSort(10000, b) }
func BenchmarkMixedMergeSort100000(b *testing.B) { benchmarkMixedMergeSort(100000, b) }
