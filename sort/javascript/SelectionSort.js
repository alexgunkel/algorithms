
this.sort = function(list_of_things) {
	var candidate, minimum, minimum_key;
	var result = [];
	var orig_length = list_of_things.length;
	for (var i = orig_length - 1; i >= 0; i--) {
		minimum = Infinity;
		minimum_key = orig_length;
		for (var index = list_of_things.length - 1; index >= 0; index--) {
			candidate = list_of_things[index]
			if (candidate < minimum) {
				minimum = candidate;
				minimum_key = index;
			}
		}

		result.push(minimum);
		list_of_things.splice(minimum_key, 1);
	}

	return result;
}