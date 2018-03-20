/*
Package sort

Merge-sort algorithm

Author Alexander Gunkel <alexandergunkel@gmail.com>
*/

package sort

/*
MergeSort ...

@param	*[]int64 sortable	pointer to a slice of things to sort
*/
func MergeSort(sortable *[]int64) {
	input := *sortable
	*sortable = mergeSort(input)
}

func mergeSort(input sortables) sortables {
	var length, middle int
	length = len(input)
	if length <= 1 {
		return input
	}

	middle = length / 2

	return merge(mergeSort(input[0:middle]), mergeSort(input[middle:length]))
}

func mergeSortMixed(input sortables) sortables {
	var length, middle int
	length = len(input)
	if length < 50 {
		return insertionSort(input)
	}

	middle = length / 2

	return merge(mergeSortMixed(input[0:middle]), mergeSortMixed(input[middle:length]))
}

func merge(partOne sortables, partTwo sortables) (result sortables) {
	lengthPartOne := len(partOne)
	lengthPartTwo := len(partTwo)
	positionPartOne := 0
	positionPartTwo := 0
	total := lengthPartOne + lengthPartTwo
	for i := 0; i < total; i++ {
		if lengthPartTwo == 0 || (lengthPartOne != 0 && partOne[positionPartOne] < partTwo[positionPartTwo]) {
			result = append(result, partOne[positionPartOne])
			positionPartOne++
			lengthPartOne--
		} else {
			result = append(result, partTwo[positionPartTwo])
			positionPartTwo++
			lengthPartTwo--
		}
	}

	return result
}
