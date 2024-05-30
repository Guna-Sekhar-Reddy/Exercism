def is_isogram(string):
    string=string.replace("-",'').replace(" ",'')
    print(string)
    string=string.lower()
    length=len(string)
    for i in range(0,length):
        for j in range (i+1,length):
            if string[i]==string[j]:
                return False
    return True
    pass
 