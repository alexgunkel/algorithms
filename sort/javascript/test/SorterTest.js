var assert = require('assert');
var insertion_sort = require("../InsertionSort.js");
var selection_sort = require("../SelectionSort.js");
var merge_sort = require("../MergeSort.js");

var test = function(func) {
	var test_list = [4,1,2,7,3,5];
	var orig_length = test_list.length;
  	var result = func(test_list);

    it('should have same length', function() {
      assert.equal(orig_length, result.length);
    });

    it('should have a sorted result', function() {
    	for (var i = result.length - 1; i >= 1; i--) {
    		assert.equal(true, result[i] >= result[i-1]);
    	}
    });
}

describe('Sorter Test', function() {
  describe('Test Insertion-Sort', function() {
  	test(insertion_sort.sort);
  });

  describe('Test Selection-Sort', function() {
  	test(selection_sort.sort);
  });

  describe('Test Merge-Sort', function() {
  	test(merge_sort.sort);
  });
});
