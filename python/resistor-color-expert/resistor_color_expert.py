def resistor_label(colors):
    color_list={'black':0,'brown':1,'red':2,'orange':3,'yellow':4,'green':5,'blue':6,'violet':7,'grey':8,'white':9}
    color_tolarance={"grey":0.05,"violet":0.1,"blue":0.25,"green":0.5,"brown":1,"red":2,"gold":5,"silver":10}
    if(len(colors)==1):
        return str(color_list[colors[0]])+' ohms';

    value=0
    
    if(len(colors)==5):
        value+=color_list[colors[0]]*100;
        value+=color_list[colors[1]]*10
        value+=color_list[colors[2]];
        value=value*pow(10,color_list[colors[3]])
    elif(len(colors)==4):
        value+=color_list[colors[0]]*10
        value+=color_list[colors[1]];
        value=value*pow(10,color_list[colors[2]])
    print(value)

    if value/pow(10,9) > 1 and value/pow(10,9)<1000:
        str1=str(value/pow(10,9))
        if str1.endswith(".0"):
            str1=str1[:-2]
        
        if(len(colors)==5):
            return str1 + ' gigaohms'+ ' ±' +str(color_tolarance[colors[4]])+'%'
        else:
            return str1 + ' gigaohms'+ ' ±' +str(color_tolarance[colors[3]])+'%'


    
    
    elif value/pow(10,6) > 1 and value/pow(10,6)<1000:
        str1=str(value/pow(10,6))
        if str1.endswith(".0"):
            str1=str1[:-2]
            
        if(len(colors)==5):
            
            return str1+ ' megaohms'+ ' ±' +str(color_tolarance[colors[4]])+'%'
        else:
            return  str1+ ' megaohms'+ ' ±' +str(color_tolarance[colors[3]])+'%'

            
    elif value/pow(10,3) >1 and value/pow(10,3)<1000:
        str1=str(value/pow(10,3))
        if str1.endswith(".0"):
            str1=str1[:-2]
        if(len(colors)==5):
            return str1 + ' kiloohms'+ ' ±' +str(color_tolarance[colors[4]])+'%'
        else:
            return str1 + ' kiloohms'+ ' ±' +str(color_tolarance[colors[3]])+'%'

    
    else:
        if(len(colors)==5):
            return str(value) + ' ohms'+ ' ±' +str(color_tolarance[colors[4]])+'%'
        else:
            return str(value) + ' ohms'+ ' ±' +str(color_tolarance[colors[3]])+'%'
    pass
