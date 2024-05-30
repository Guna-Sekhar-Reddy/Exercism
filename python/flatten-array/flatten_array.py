def flatten(iterable):
    ans = []
    return recursion_list(iterable, ans)

def recursion_list(iterable, ans):
    for i in iterable:
        if isinstance(i, list):
            recursion_list(i, ans)
        elif i is not None:
            ans.append(i)
    return ans
 

