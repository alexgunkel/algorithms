
this.sort = function (list_of_things) {
	var result = [];
	var current_length = 0;
	for (var k = list_of_things.length - 1; k >= 0; k--) {
		result[current_length] = list_of_things[k];
		current_length++;
		for (var i = current_length - 1; i >= 1 && result[i] < result[i-1]; i--) {
			var tmp = result[i];
			result[i] = result[i-1];
			result[i-1] = tmp;
		}
	}

	return result;
}
