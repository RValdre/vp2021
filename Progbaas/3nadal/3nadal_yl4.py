import math

a = int(input("Sisesta a väärtus: "))
b = int(input("Sisesta b väärtus: "))
c = int(input("Sisesta c väärtus: "))

juur_valem = b ** 2 - 4 * a * c
if juur_valem > 0:
    x1 = ((b * -1) + math.sqrt(juur_valem)) / (2 * a)
    x2 = ((b * -1) - math.sqrt(juur_valem)) / (2 * a)
    print("x1 =",x1, "ja x2 =",x2)
else:
    print("Lahendid puuduvad")
