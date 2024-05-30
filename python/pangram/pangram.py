def is_pangram(sentence):

    if len(sentence)==0:
        return False
    hash=[0]*26
    sentence=sentence.upper()
    
    for i in sentence:
        if i.isalpha():
            print(i)
            hash[ord(i)-65]=1
    for i in hash:
        if i==0:
            return False;
    return True
    pass
