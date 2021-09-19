a = int(input("Sisesta esimese kaika pikkus: "))
b = int(input("Sisesta teise kaika pikkus: "))
c = int(input("Sisesta kolmanda kaika pikkus: "))

if a + b > c and b + c > a and c + a > b:
    print("Nende kolme kaikaga saad moodustada kolmnurga !")
else:
    print("Kahjuks ei saa nende kaigastega moodustada kolmnurka !")

