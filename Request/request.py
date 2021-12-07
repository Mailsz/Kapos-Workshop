import requests
import html

text = requests.get("http://127.0.0.1:1111").text # URL a kiszolgalo weboldalhoz (meg kell oldani hogy valtozzon ha cherrypy marad
szo = html.unescape(text) # dekodolja a html szoveget ha a request belefoglalja a stringbe a html elementeket