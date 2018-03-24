import unittest
import InsertionSort
import SortAlgorithmTestCase


class InsertionSortTest(SortAlgorithmTestCase.SortAlgorithmTestCase):

    def apply_sort(self, list_of_things):
        return InsertionSort.insertion_sort(list_of_things)


if __name__ == '__main__':
    unittest.main()
