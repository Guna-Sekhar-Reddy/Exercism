def find(search_list, value):
    l=0;
    r=len(search_list)-1;
    for i in range(0,len(search_list)):
        m=(l+r)//2;
        if search_list[m]==value:
            return m
        elif value<search_list[m]:
            r=m-1
        else:
            l=m+1
    raise ValueError("value not in array")
    pass
