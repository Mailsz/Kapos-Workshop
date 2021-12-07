import cherrypy
import random
import mysql.connector

def randomszo():
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="kapos"
    )

    szam = random.randint(1, 5)
    mycursor = mydb.cursor()

    mycursor.execute("SELECT szo FROM szavak WHERE id='" + str(szam) + "'")

    myresult = mycursor.fetchall()

    szo = ''

    for x in myresult:
        szo = x
    print(szo[0])

randomszo()