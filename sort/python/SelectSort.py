
def select_sort(list_of_things):
    result = []
    length = len(list_of_things)
    while length > 0:
        smallest_value = list_of_things[0]
        smallest_key = 0
        for index, item in enumerate(list_of_things):
            if item < smallest_value:
                smallest_value = item
                smallest_key = index
        result[len(result):] = [smallest_value]
        length = length - 1
        del list_of_things[smallest_key]
    return result
