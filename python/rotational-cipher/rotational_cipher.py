def rotate(text, key):
    key = key % 26
    res = ''
    
    for ch in text:
        if ch.isalpha():
            if ch.isupper():
                res += chr((ord(ch) - ord('A') + key) % 26 + ord('A'))
            elif ch.islower():
                res += chr((ord(ch) - ord('a') + key) % 26 + ord('a'))
        else:
            res += ch
    
    print(res)
    return res
