import unittest
import SelectSort
import SortAlgorithmTestCase


class SelectSortTest(SortAlgorithmTestCase.SortAlgorithmTestCase):

    def apply_sort(self, list_of_things):
        return SelectSort.select_sort(list_of_things)


if __name__ == '__main__':
    unittest.main()
