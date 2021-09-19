aasta_nr = int(input("Sisesta aasta number: "))


if aasta_nr % 4 == 0 and aasta_nr % 100 == 0 and aasta_nr % 400 != 0:
    print("Sisestatud aasta ei ole liigaasta! ")
elif aasta_nr % 4 == 0 or aasta_nr % 400 == 0:
    print("Sisestatud aasta on liigaasta! ")