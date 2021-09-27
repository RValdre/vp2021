import random
vastus = "j"
print("Alustasid numbri ära arvamise mängu, edu!")
counter = 0
nr = random.randint(1, 10)
while vastus == "j":
    guess_nr = int(input("Proovi ära arvata numbri väärtus!: "))
    
    if guess_nr == nr:
        print("Tubli sisestaid õige arvu!")
        vastus = str(input("Kas soovid uuesti mängida [j/e] ? "))
        if vastus != "j":
            break
        else:
            counter = 0
            nr = random.randint(1, 10)
            continue
    if counter == 2:
        print("Kahjuks põrusid numbri arvamises :c")
        vastus = str(input("Kas soovid uuesti mängida [j/e] ? "))
        if vastus != "j":
            break
        else:
            counter = 0
            nr = random.randint(1, 10)
            continue
    
    if guess_nr > nr:
        print("Sisestatud number on liiga suur, proovi madalamat!")
        counter += 1
    if guess_nr < nr:
        print("Sisestatud number on liiga väike, proovi suuremat!")
        counter += 1
    
    