def is_valid(isbn):
    
    isbn=isbn.replace('-','')
    if(len(isbn)!=10):
        return False
    sum=0;
    scale=10;
    for i in isbn:
        if i=='X' and scale==1:
            sum+=10
            print(sum)
        elif i.isdigit():
            sum+=scale*(int(i)-int('0'))
            scale-=1
            print(sum)
        else:
            return False
    return sum%11==0
            
    pass
