def square_of_sum(number):
    sum=(number*(number+1))//2
    return sum*sum
    pass


def sum_of_squares(number):
    sum=0;
    for i in range(1,number+1):
        sum=sum+i*i;
    return sum
    pass


def difference_of_squares(number):
    return square_of_sum(number)-sum_of_squares(number)
    pass
