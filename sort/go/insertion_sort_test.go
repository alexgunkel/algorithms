package sort

import (
	"github.com/stretchr/testify/assert"
	"strconv"
	"testing"
)

func TestInsertionSort(testing *testing.T) {
	content, _ := readLines("./data/random10")
	InsertionSort(&content)

	for key, number := range content {
		if key > 0 {
			compare := content[key-1]
			assert.Truef(testing, compare < number, "Asssert that %d is greater then %d", number, compare)
		}
	}
}

var insertionResult sortables

func benchmarkInsertionSort(amount int64, b *testing.B) {
	file := "./data/random" + strconv.FormatInt(amount, 10)
	content, _ := readLines(file)
	var newResult sortables
	for n := 0; n < b.N; n++ {
		newResult = insertionSort(content)
	}

	insertionResult = newResult
}

func BenchmarkInsertionSort10(b *testing.B)     { benchmarkInsertionSort(10, b) }
func BenchmarkInsertionSort100(b *testing.B)    { benchmarkInsertionSort(100, b) }
func BenchmarkInsertionSort1000(b *testing.B)   { benchmarkInsertionSort(1000, b) }
func BenchmarkInsertionSort10000(b *testing.B)  { benchmarkInsertionSort(10000, b) }
func BenchmarkInsertionSort100000(b *testing.B) { benchmarkInsertionSort(100000, b) }
