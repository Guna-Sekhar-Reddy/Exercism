import math
def score(x, y):
    length=math.sqrt(x*x + y*y)
    if length<= 1:
        return 10;
    elif length<=5:
        return 5;
    elif length<=10:
        return 1;
    else :
        return 0
    pass
