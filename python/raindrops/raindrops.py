def convert(number):
    res=''
    if number%3==0:
        res=res+'Pling'
    if number%5==0:
        res=res+'Plang'
    if number%7==0:
        res=res+'Plong'
    if(res==''):
        res=res+str(number)
    return res
    pass
