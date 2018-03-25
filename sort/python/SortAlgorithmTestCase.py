import unittest
import time


class SortAlgorithmTestCase(unittest.TestCase):

    def test_sort(self):
        example = [2, 4, 3, 0]
        result = [0, 2, 3, 4]
        self.assertEqual(self.apply_sort(example), result)

    def test_empty_array(self):
        example = []
        result = []
        self.assertEqual(self.apply_sort(example), result)

    def test_sort_data(self):
        for name in ['random10', 'random100', 'random1000']:
            example = self.read_test_data(name)
            result = self.apply_sort(example)
            index = 1
            length = len(result)
            self.assertEqual(length, len(example))
            while index < length:
                self.assertGreaterEqual(result[index], result[index - 1])
                index = index + 1

    def apply_sort(self, list_of_things):
        return list_of_things

    def read_test_data(self, file_name):
        result = []
        with open("./data/" + file_name) as file:
            for line in file:
                result.append(line.strip())
        return result
