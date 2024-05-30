def to_rna(dna_strand):
    str=''
    for ch in dna_strand:
        if ch=='G':
            str=str+'C'
        elif ch=='C':
            str=str+'G'    
        elif ch=='T' :
            str=str+'A'
        elif ch=='A':
            str=str+'U'
        else :
            return ""
    return str
    pass
