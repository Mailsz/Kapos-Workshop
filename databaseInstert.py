# Ez a kód egy magyar szólistát lefordít angol és német nyelvre, majd a szavakat belerakja az adatbázisba.
import mysql.connector
from translate import Translator

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="gamenet0218",
    database="szavak"
)

mycursor = mydb.cursor()

szavak = open("szolista/szavak.txt", "r", encoding="utf-8")
for szo in szavak:
    translator = Translator(from_lang="hungarian", to_lang="english")
    angol = translator.translate(szo)

    translator = Translator(from_lang="hungarian", to_lang="german")
    nemet = translator.translate(szo)
    print(szo, angol, nemet)

    sql = "INSERT INTO szolista (magyar, angol, nemet) VALUES (%s, %s, %s)"
    val = (szo, angol, nemet)
    mycursor.execute(sql, val)

    mydb.commit()

print(mycursor.rowcount, "record inserted.")
