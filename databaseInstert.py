# Ez a kód rakja bele a szavakat az adatbázisba
import MySQLdb

mydb = MySQLdb.connect(
    host="localhost",
    user="root",
    password="",
    database="szavak"
)

magyarszavak = open("szolista/Magyar.txt", "r", encoding="utf-8")
magyarszavakLista = []
for szo in magyarszavak:
    magyarszavakLista.append(szo.rstrip("\n"))

angolszavak = open("szolista/Angol.txt", "r", encoding="utf-8")
angolszavakLista = []
for szo in angolszavak:
    angolszavakLista.append(szo.rstrip("\n"))

finnszavak = open("szolista/Finn.txt", "r", encoding="utf-8")
finnszavakLista = []
for szo in finnszavak:
    finnszavakLista.append(szo.rstrip("\n"))

for i in range(58):
    magyar = magyarszavakLista[i]
    angol = angolszavakLista[i]
    finn = finnszavakLista[i]
    print(magyar, angol, finn)
    mycursor = mydb.cursor()
    mycursor.execute(
        "INSERT INTO szavak (magyar, angol, finn) VALUES('" + magyar + "', '" + angol + "', '" + finn + "')")
    mydb.commit()

"""
for szo in szavak:
    mycursor = mydb.cursor()
    mycursor.execute("INSERT INTO szavak (magyar) VALUES('" + szo + "'")
    mydb.commit()
"""
print(mycursor.rowcount, "record inserted.")
