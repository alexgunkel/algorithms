import unittest
import SortAlgorithmTestCase
import MergeSort


class MergeSortTest(SortAlgorithmTestCase.SortAlgorithmTestCase):

    def test_merge(self):
        list_1 = [1, 2, 3, 8, 11, 13, 24]
        list_2 = [4, 5, 6, 7, 9]
        self.assertEqual(
            [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 13, 24],
            MergeSort.merge(list_1, list_2)
        )

    def apply_sort(self, list_of_things):
        return MergeSort.merge_sort(list_of_things)


if __name__ == '__main__':
    unittest.main()
