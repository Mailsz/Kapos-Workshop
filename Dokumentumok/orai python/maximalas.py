dbNap = int(input())
eladasDb = []
be1 = int(input())
eladasDb.append(be1)
kulonbseg = [0]
kezdet = [-1]
for i in range(1,dbNap):
    be = int(input())
    eladasDb.append(be)
    if(eladasDb[i]>eladasDb[i-1]):
        if(kezdet[i-1]>-1):
            kezdet.append(kezdet[i-1])
        else:
            kezdet.append(i-1)
        kulonbseg.append(eladasDb[i]-eladasDb[i-1]+kulonbseg[i-1])
    else:
        kezdet.append(-1)
        kulonbseg.append(0)
print(eladasDb)
print(kulonbseg)
print(kezdet)


