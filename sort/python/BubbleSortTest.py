import unittest
import BubbleSort


class BubbleSortTest(unittest.TestCase):

    def test_bubble_sort(self):
        example = [2, 4, 3, 0]
        result = [0, 2, 3, 4]
        self.assertEqual(BubbleSort.bubble_sort(example), result)

    def test_empty_array(self):
        example = []
        result = []
        self.assertEqual(BubbleSort.bubble_sort(example), result)


if __name__ == '__main__':
    unittest.main()
