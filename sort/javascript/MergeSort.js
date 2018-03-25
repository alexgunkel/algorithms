
function merge_sort(list_of_things) {
	var list_length = list_of_things.length;

	if (list_length < 2) {
		return list_of_things;
	}

	middle = Math.floor(list_length/2);

	var part_1 = list_of_things.slice(0, middle);
	var part_2 = list_of_things.slice(middle, list_length);
	return merge(
		merge_sort(part_1),
		merge_sort(part_2)
		);
}

function merge(list_1, list_2) {
	var result = [];
	var a_1 = list_1.shift();
	var a_2 = list_2.shift();
	while (a_1 || a_2) {
		if (!a_2 || a_1 < a_2) {
			result.push(a_1);
			a_1 = list_1.shift();
		} else {
			result.push(a_2);
			a_2 = list_2.shift();
		}
	}

	return result;
}

this.sort = merge_sort
