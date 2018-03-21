

def bubble_sort(list_of_sortables):
    length = len(list_of_sortables)
    changed = True

    while changed:
        changed = False
        for i in range(1, length):
            if list_of_sortables[i] < list_of_sortables[i - 1]:
                tmp = list_of_sortables[i]
                list_of_sortables[i] = list_of_sortables[i - 1]
                list_of_sortables[i - 1] = tmp
                changed = True

    return list_of_sortables


