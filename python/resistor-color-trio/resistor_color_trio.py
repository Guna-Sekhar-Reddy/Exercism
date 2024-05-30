def label(colors):
    color_list={'black':0,'brown':1,'red':2,'orange':3,'yellow':4,'green':5,'blue':6,'violet':7,'grey':8,'white':9}
    value=0
    value+=color_list[colors[0]]*10;
    value+=color_list[colors[1]];
    value=value*pow(10,color_list[colors[2]])

    if value/pow(10,9) > 1 and value/pow(10,9)<1000:
        return str(value//pow(10,9)) + ' gigaohms'
    elif value/pow(10,6) > 1 and value/pow(10,6)<1000:
        return str(value//pow(10,6)) + ' megaohms'
    elif value/pow(10,3) >1 and value/pow(10,3)<1000:
        return str(value//pow(10,3))+ ' kiloohms'
    else:
        return str(value)+' ohms'
