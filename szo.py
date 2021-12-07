import os, os.path
import random
import string
import mysql.connector
import cherrypy

cherrypy.engine.stop()
cherrypy.server.httpserver = None
cherrypy.config.update({'server.socket_port': 8017})
cherrypy.engine.start()

class StringGenerator(object):
    @cherrypy.expose
    def index(self):
        return open('singleplayer.html', encoding="utf-8")

@cherrypy.expose
class StringGeneratorWebService(object):

    @cherrypy.tools.accept(media='text/plain')
    def GET(self):
        return cherrypy.session['mystring']

    def POST(self, length=8):
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
        return szo[0]

    def PUT(self, another_string):
        cherrypy.session['mystring'] = another_string

    def DELETE(self):
        cherrypy.session.pop('mystring', None)

if __name__ == '__main__':
    conf = {
        '/': {
            'tools.sessions.on': True,
            'tools.staticdir.root': os.path.abspath(os.getcwd())
        },
        '/generator': {
            'request.dispatch': cherrypy.dispatch.MethodDispatcher(),
            'tools.response_headers.on': True,
            'tools.response_headers.headers': [('Content-Type', 'text/plain')],
        },
        '/css': {
            'tools.staticdir.on': True,
            'tools.staticdir.dir': 'css'
        },
        '/kepek': {
            'tools.staticdir.on': True,
            'tools.staticdir.dir': 'kepek'
        },
        '/main.css': {
            'tools.staticfile.on': True,
            'tools.staticfile.filename': '/css/main.css'
        }
    }
    webapp = StringGenerator()
    webapp.generator = StringGeneratorWebService()
    cherrypy.quickstart(webapp, '/', conf)