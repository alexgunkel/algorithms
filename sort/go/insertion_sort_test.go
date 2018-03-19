package sort

import (
	"strconv"
	"testing"
	"github.com/stretchr/testify/assert"
)

func TestInsertionSort(testing *testing.T) {
	content, _ := readLines("./data/random10")
	Insertion_sort(&content)

	for key, number := range content {
		if key > 0 {
			compare := content[key-1]
			assert.Truef(testing, compare < number, "Asssert that %d is greater then %d", number, compare)
		}
	}
}

var insertion_result sortables

func benchmarkInsertionSort(amount int64, b *testing.B) {
	file := "./data/random" + strconv.FormatInt(amount, 10)
	content, _ := readLines(file)
	var new_result sortables
	for n := 0; n < b.N; n++ {
		new_result = sort_insertion(content)
	}

	insertion_result = new_result
}

func BenchmarkInsertionSort10(b *testing.B) { benchmarkInsertionSort(10, b) }
func BenchmarkInsertionSort100(b *testing.B) { benchmarkInsertionSort(100, b) }
func BenchmarkInsertionSort1000(b *testing.B) { benchmarkInsertionSort(1000, b) }
func BenchmarkInsertionSort10000(b *testing.B) { benchmarkInsertionSort(10000, b) }
func BenchmarkInsertionSort100000(b *testing.B) { benchmarkInsertionSort(100000, b) }
