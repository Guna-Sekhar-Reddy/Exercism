def append(list1, list2):
    j=0
    l1=length(list1)
    l2=length(list2)
    ans=[0]*(l1+l2)
    for i in list1:
        ans[j]=i
        j=j+1
    for i in list2:
        ans[j]=i
        j+=1
    return ans;

def concat(lists): 
    ans=[]
    for lst in lists:
        ans=ans+lst
    return ans
    pass


def filter(function, list):
    count = 0
    for item in list:
        if function(item):
            count += 1

    ans=[0]*count
    i=0;
    for item in list:
        if function(item) :
            ans[i]=item
            i=i+1
    return ans
    pass



def length(list):
    count=0;
    for item in list:
        count+=1;
    return count;
    pass


def map(function, list):
    i=0;
    ans=[0]*(length(list))
    for item in list:
        ans[i]=function(item);
        i+=1
    return ans
    pass


def foldl(function, list, initial):
    result = initial
    for item in list:
        result = function(result, item)
    return result
    pass


def foldr(function, list, initial):
    list=reverse(list)
    result=initial
    for item in list:
        result=function(result,item)
    return result
    pass


def reverse(list):
    count=length(list)
    count=count//2
    for i in range(0,count):
        list[i],list[-(i+1)]=list[-(i+1)],list[i]
    return list
    pass
