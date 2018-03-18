package sort

func select_sort(input *[]int64) {
	sortables := *input
	var output []int64
	var length int
	var current_length int
	var index int
	var minimum int64
	length = len(sortables)
	current_length = length
	for i := 0; i < length; i++ {
		minimum = sortables[0]
		index = 0
		for j := 1; j < current_length; j++ {
			if sortables[j] < minimum {
				index = j
				minimum = sortables[j]
			}
		}
		output = append(output, sortables[index])
		sortables = append(sortables[:index], sortables[index+1:]...)
		current_length--
	}

	*input = output
}
