def find_anagrams(word, candidates):
    
    word = word.lower()
    ch_cnt2 = {}
    
    for char in word:
        if char in ch_cnt2:
            ch_cnt2[char] += 1
        else:
            ch_cnt2[char] = 1
    
    ans = []
    for item in candidates:
     
        if word == item.lower():
            continue

        
        ch_cnt1 = {}
        item_lower = item.lower()
        
        for char in item_lower:
            if char in ch_cnt1:
                ch_cnt1[char] += 1
            else:
                ch_cnt1[char] = 1
        
        if ch_cnt1 == ch_cnt2:
            ans.append(item)
    
    return ans


