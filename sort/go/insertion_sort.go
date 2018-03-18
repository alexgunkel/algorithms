package sort

func insertion_sort(input *[]int64) {
	sortables := *input
	length := len(sortables)
	for i := 1; i < length; i++ {
		for j := i; j > 0; j-- {
			if sortables[j] < sortables[j-1] {
				tmp := sortables[j]
				sortables[j] = sortables[j-1]
				sortables[j-1] = tmp
			}
		}
	}

	*input = sortables
}