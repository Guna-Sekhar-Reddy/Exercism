def commands(binary_str):
    ans=list()
    if(len(binary_str)>=1):
        if(binary_str[-1]=='1'):
            ans.append('wink')
            
    if(len(binary_str)>=2):
        if(binary_str[-2]=='1'):
            ans.append('double blink')

    if(len(binary_str)>=3):
        if(binary_str[-3]=='1'):
            ans.append('close your eyes')

    if(len(binary_str)>=4):
        if(binary_str[-4]=='1'):
            ans.append('jump')
    if(len(binary_str)>=5):
        if(binary_str[-5]=='1'):
            ans=ans[::-1]
    return ans
        
    pass
