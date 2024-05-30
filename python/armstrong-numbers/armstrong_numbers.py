def is_armstrong_number(number):
    strnum=str(number)
    count=len(strnum)
    temp=number
    sum=0
    while(temp):
        rem=temp%10
        sum=sum+pow(rem,count)
        temp=temp//10
    if(number==sum):
        return True
    else:
        return False
    pass
