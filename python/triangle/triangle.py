

def equilateral(sides):
    a=sides[0]
    b=sides[1]
    c=sides[2]
    if(check_valid(sides)==True):
        if(a==b==c):
            return True
        else:
            return False
    else:
        return False
    pass


def isosceles(sides):
    a=sides[0]
    b=sides[1]
    c=sides[2]
    if(check_valid(sides)==True):
        if(a==b or b==c or c==a):
            return True
        else:
            return False
    else:
        return False
    pass


def scalene(sides):
    a=sides[0]
    b=sides[1]
    c=sides[2]
    if(check_valid(sides)==True):
        if(a!=b and b!=c and c!=a):
            return True
        else:
            return False
    else:
        return False
    pass

def check_valid(sides):
    a=sides[0]
    b=sides[1]
    c=sides[2]
    if(a<=0 or b<=0 or c<=0):
        return False,
    if(a+b>=c and b+c>=a and a+c>=b):
        return True