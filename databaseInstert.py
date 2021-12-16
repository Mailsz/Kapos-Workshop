# Ez a kód egy magyar szólistát lefordít angol és német nyelvre, majd a szavakat belerakja az adatbázisba.
import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="gamenet0218",
    database="szavak"
)

mycursor = mydb.cursor()

szavak = open("Magyar.txt", "r", encoding="utf-8")
for szo in szavak:
    print(szo)
    nyelv="magyar"
    sql = "INSERT INTO szolista " + nyelv + " VALUES (%s)"
    val = (szo)
    mycursor.execute(sql, val)

    mydb.commit()

print(mycursor.rowcount, "record inserted.")
