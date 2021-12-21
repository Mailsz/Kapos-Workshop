import string
file=open("Angol.txt", "r", encoding="utf-8")

szavak=[]
for i in file:
    szavak.append(file.readline().strip("\n").lower())
abc=string.ascii_lowercase
szavak2=[]
for szo in szavak:
    temp=""
    for i in range(len(abc)):
        if(abc[i] in szo):
            temp+=abc[i]
    szavak2.append(temp)
file.close()
gyakor=open("betugyakorisag", "r", encoding="utf-8")
ertekek=[]
gyakorisag=[]
for i in gyakor:
    gyakorisag.append(float(i.strip("\n")))
for i in range(len(szavak)):
    ertekek.append(0)
i=0
for string in szavak2:
    for j in range(len(string)):
        ertekek[i] +=  round(0.125 - gyakorisag[abc.find(string[j])], 3)
    i+=1

print(szavak)
print(szavak2)
print(ertekek)