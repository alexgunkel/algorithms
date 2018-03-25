var assert = require('assert');
var sorter = require("../InsertionSort.js");

test_list = [4,1,2,7,4,5]

describe('Array', function() {
  describe('#indexOf()', function() {
  	var result = sorter.insertion_sort(test_list);
    it('should have same length', function() {
      assert.equal(test_list.length, result.length);
    });

    it('should have a sorted result', function() {
    	for (var i = result.length - 1; i >= 1; i--) {
    		assert.equal(true, result[i] >= result[i-1]);
    	}
    });
  });
});
