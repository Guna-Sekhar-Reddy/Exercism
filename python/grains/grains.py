def square(number):
    if 1<=number<=64:
        return pow(2,number-1)
    else:
        raise ValueError("square must be between 1 and 64")
    pass


def total():
    sum=0
    for i in range(0,64):
        sum=sum+pow(2,i)
    return sum
    pass
