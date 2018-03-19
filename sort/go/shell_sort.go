//shell_sort.go
package sort

func Shell_sort(input *[]int64) {
	args := *input
	*input = sort_shell(args)
}

func sort_shell(input []int64) sortables {
	var length, interval int
	length = len(input)
	interval = 1

	for interval < length/3 {
	 	interval = interval * 3 +1
	}

	for interval > 0 {
		for i := interval; i < length; i++ {
			for j := i; j >= interval && input[j-interval] > input[j]; j = j-interval {
				changePositions(&input, j, j-interval)
			}
		}
		interval = interval / 3
	}

	return input
}

func changePositions(sl_ptr *[]int64, posOne int, posTwo int) {
	sl := *sl_ptr
	var tmp int64
	tmp = sl[posOne]
	sl[posOne] = sl[posTwo]
	sl[posTwo] = tmp
	*sl_ptr = sl
}
