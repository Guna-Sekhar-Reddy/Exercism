def color_code(color):
    color_list=colors();
    for i in range(0,10):
        if color==color_list[i]:
            return i
            
    pass


def colors():
    color_list=['black','brown','red','orange','yellow','green','blue','violet','grey','white']
    return color_list
    pass
