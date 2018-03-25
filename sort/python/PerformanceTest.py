import BubbleSort
import InsertionSort
import SelectSort
import MergeSort
import time


def read_test_data(file_name):
    test_data_list = []
    with open("./data/" + file_name) as file:
        for line in file:
            test_data_list.append(line.strip())
    return test_data_list


def test_with_list(test_data):
    print('MergeSort:')
    start_time = int(round(time.time() * 1000))
    result = MergeSort.merge_sort(test_data)
    duration = int(round(time.time() * 1000)) - start_time
    print('Duration: ' + str(duration) + 'ms')
    empty_target = result
    del result
    del start_time
    del duration

    print('InsertionSort:')
    start_time = int(round(time.time() * 1000))
    result = InsertionSort.insertion_sort(test_data)
    duration = int(round(time.time() * 1000)) - start_time
    print('Duration: ' + str(duration) + 'ms')
    empty_target = result
    del result
    del start_time
    del duration

    print('BubbleSort:')
    start_time = int(round(time.time() * 1000))
    result = BubbleSort.bubble_sort(test_data)
    duration = int(round(time.time() * 1000)) - start_time
    print('Duration: ' + str(duration) + 'ms')
    empty_target = result
    del result
    del start_time
    del duration

    print('SelectSort:')
    start_time = int(round(time.time() * 1000))
    result = SelectSort.select_sort(test_data)
    duration = int(round(time.time() * 1000)) - start_time
    print('Duration: ' + str(duration) + 'ms')
    empty_target = result
    del result
    del start_time
    del duration

empty_target = []

for amount in ['random10', 'random100', 'random1000', 'random10000']:
    print('testing performance for test set ' + amount)
    test_data = read_test_data(amount)
    test_with_list(test_data)

    test_data[len(test_data):] = read_test_data(amount)
    print('double')
    test_with_list(test_data)
