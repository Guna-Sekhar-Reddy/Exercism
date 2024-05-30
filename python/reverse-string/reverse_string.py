def reverse(text):
    traverse=len(text);
    str=''
    for i in range(traverse-1,-1,-1):
        str=str+text[i]
    return str
    pass
