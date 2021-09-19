vanus = int(input("Sisesta oma vanus: "))
pikkus = int(input("Sisesta oma pikkus: "))
kaal = int(input("Sisesta oma kaal: "))
sugu = str(input("Sisesta oma sugu (m/n): "))

if sugu == "m":
    ik = (3 * pikkus - 450 + vanus) * 0.25 + 45
    rp = ((kaal - ik) / kaal) * 100 + 15
    
else:
    ik = (3 * pikkus - 450 + vanus) * 0.225 + 40.5
    rp = ((kaal - ik) / kaal) * 100 + 22

if sugu == "m":
    if 10 < vanus <= 16:
        if rp < 10:
            print("Sinu rasva % on alla normi !")
        elif 10 >= rp or rp <= 18:
            print("Sinu rasva % on tervislikul tasemel !")
        elif 19 >= rp or rp <= 23:
            print("Sinu rasva % on üle normi !")
        elif rp > 23:
            print("Oled üle rasvunud !")
    if 17 < vanus <= 39:
        if rp < 12:
            print("Sinu rasva % on alla normi !")
        elif 12 >= rp or rp <= 20:
            print("Sinu rasva % on tervislikul tasemel !")
        elif 21 >= rp or rp <= 25:
            print("Sinu rasva % on üle normi !")
        elif rp > 25:
            print("Oled üle rasvunud !")
    if 40 < vanus <= 55:
        if rp < 13:
            print("Sinu rasva % on alla normi !")
        elif 13 >= rp or rp <= 21:
            print("Sinu rasva % on tervislikul tasemel !")
        elif 22 >= rp or rp <= 26:
            print("Sinu rasva % on üle normi !")
        elif rp > 26:
            print("Oled üle rasvunud !")
    

if sugu == "n":
    if 10 < vanus <= 16:
        if rp < 18:
            print("Sinu rasva % on alla normi !")
        elif 19 >= rp or rp <= 28:
            print("Sinu rasva % on tervislikul tasemel !")
        elif 29 >= rp or rp <= 35:
            print("Sinu rasva % on üle normi !")
        elif rp > 35:
            print("Oled üle rasvunud !")
    if 17 < vanus <= 39:
        if rp < 20:
            print("Sinu rasva % on alla normi !")
        elif 20 >= rp or rp <= 32:
            print("Sinu rasva % on tervislikul tasemel !")
        elif 33 >= rp or rp <= 38:
            print("Sinu rasva % on üle normi !")
        elif rp > 38:
            print("Oled üle rasvunud !")
    if 40 < vanus <= 55:
        if rp < 23:
            print("Sinu rasva % on alla normi !")
        elif 23 >= rp or rp <= 35:
            print("Sinu rasva % on tervislikul tasemel !")
        elif 36 >= rp or rp <= 41:
            print("Sinu rasva % on üle normi !")
        elif rp > 41:
            print("Oled üle rasvunud !")
            