// merge_sort.go
package sort

func Merge_sort(sortable *[]int64) {
	input := *sortable
	*sortable = sort_merge(input)
}

func sort_merge(input sortables) sortables {
	var length, middle int
	length = len(input)
	if length <= 1 {
		return input
	}

	middle = length / 2

	return merge(sort_merge(input[0:middle]), sort_merge(input[middle:length]))
}

func sort_merge_mixed(input sortables) sortables {
	var length, middle int
	length = len(input)
	if length < 50 {
		return sort_insertion(input)
	}

	middle = length / 2

	return merge(sort_merge_mixed(input[0:middle]), sort_merge_mixed(input[middle:length]))
}

func merge(partOne sortables, partTwo sortables) (result sortables) {
	length_partOne := len(partOne)
	length_partTwo := len(partTwo)
	position_partOne := 0;
	position_partTwo := 0;
	total := length_partOne + length_partTwo
	for i := 0; i < total; i++ {
		if length_partTwo == 0 || (length_partOne != 0 && partOne[position_partOne] < partTwo[position_partTwo])  {
			result = append(result, partOne[position_partOne])
			position_partOne++
			length_partOne--
		} else {
			result = append(result, partTwo[position_partTwo])
			position_partTwo++
			length_partTwo--
		}
	}

	return result
}
