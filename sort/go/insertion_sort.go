package sort

func Insertion_sort(input *[]int64) {
	sortables := *input
	*input = sort_insertion(sortables)
}

func sort_insertion(input sortables) sortables {
	length := len(input)
	for i := 1; i < length; i++ {
		for j := i; j > 0; j-- {
			if input[j] < input[j-1] {
				tmp := input[j]
				input[j] = input[j-1]
				input[j-1] = tmp
			}
		}
	}
	
	return input
}