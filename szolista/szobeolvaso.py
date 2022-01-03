lista = open("szavak.txt", "r", encoding="utf-8")
len = 0
szavak = lista.read().strip().split()
print(szavak)