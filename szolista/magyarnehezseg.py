import string
import MySQLdb

file=open("Magyar.txt", "r", encoding="utf-8")
#szavak beolvasása
szavak=[]
for i in file:
    szavak.append(i.strip("\n").lower())

betuk=open("magyarbetuk", "r", encoding="utf-8")
abc=[]
gyakorisag=[]
beolv=[]
for i in betuk:
    beolv.append(i.strip('\n').split())
for j in beolv:
    gyakorisag.append(float(j[1]))
    abc.append(j[0])

#szavak betűkké változtatása
szavak2=[]

for szo in szavak:
    temp = ""
    for i in range(len(abc)):
        if (abc[i] in szo):
            temp += abc[i]
    szavak2.append(temp)
file.close()

#szavak ertekenek kiszamolasa
ertekek=[]
for i in szavak:
    ertekek.append(0)
i=0
for string in szavak2:
    for j in range(len(string)):
        ertekek[i] +=  12.6 - gyakorisag[abc.index(string[j])]
    ertekek[i]=round(ertekek[i], 3)
    i+=1
print(ertekek)
print(szavak)
#besorolas

mydb = MySQLdb.connect(
    host="localhost",
    user="root",
    password="",
    database="szavak"
)

j=0
for szam in ertekek:
    mycursor = mydb.cursor()
    if (szam < 30):
        mycursor.execute(
            "INSERT INTO szavak (szo, nyelv, nehezseg) VALUES('" + szavak[j] + "', 'magyar', 'konnyu')")
        mydb.commit()
    elif szam >= 30 and szam < 50:
        mycursor.execute(
            "INSERT INTO szavak (szo, nyelv, nehezseg) VALUES('" + szavak[j] + "', 'magyar', 'kozepes')")
        mydb.commit()
    elif szam >= 50:
        mycursor.execute(
            "INSERT INTO szavak (szo, nyelv, nehezseg) VALUES('" + szavak[j] + "', 'magyar', 'nehez')")
        mydb.commit()
    j += 1
print(mycursor.rowcount, "record inserted.")
