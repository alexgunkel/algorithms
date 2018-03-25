

def merge_sort(list_of_things):
    length = len(list_of_things)
    if length <= 1:
        return list_of_things

    middle = (length / 2)
    return merge(
        merge_sort(list_of_things[:middle]),
        merge_sort(list_of_things[middle:])
    )


def merge(list_1, list_2):
    result = []
    for item in list_1:
        while len(list_2) > 0 and list_2[0] < item:
            result.append(list_2[0])
            del list_2[0]
        result.append(item)
    result[len(result):] = list_2
    return result
