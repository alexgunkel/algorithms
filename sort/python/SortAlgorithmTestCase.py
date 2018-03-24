import unittest


class SortAlgorithmTestCase(unittest.TestCase):

    def test_sort(self):
        example = [2, 4, 3, 0]
        result = [0, 2, 3, 4]
        self.assertEqual(self.apply_sort(example), result)

    def test_empty_array(self):
        example = []
        result = []
        self.assertEqual(self.apply_sort(example), result)

    def apply_sort(self, list_of_things):
        return list_of_things
