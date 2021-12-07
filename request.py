import requests
import html

text = requests.get("http://127.0.0.1:4021").text # URL a kiszolgalo weboldalhoz (meg kell oldani hogy valtozzon ha cherrypy marad
szo = html.unescape(text) # dekodolja a html szoveget ha a request belefoglalja a stringbe a html elementeket
print(szo)