import math

kaal = int(input("Sisesta kaal!: "))
pikkus = int(input("Sisesta pikkus! : "))
vanus = int(input("Sisesta vanus! : "))
sugu = str(input("Sisesta sugu(mees/naine)! : "))
print("\n\n")

if sugu == "mees":
    ik = (3 * pikkus - 450 + vanus) * 0.25 + 45
    rp = ((kaal - ik) / kaal) * 100 + 15
    t = 8.9 * rp + 11 * (100 - rp)
    r = kaal / t
    p = (1000 * kaal) ** ((35.75 - math.log(kaal, 10)) / 53.2) * ((pikkus ** 0.3) / 3118.2)
else:
    ik = (3 * pikkus - 450 + vanus) * 0.225 + 40.5
    rp = ((kaal - ik) / kaal) * 100 + 22
    t = 8.9 * rp + 11 * (100 - rp)
    r = kaal / t
    p = (1000 * kaal) ** ((35.75 - math.log(kaal, 10)) / 53.2) * ((pikkus ** 0.3) / 3118.2)

print("kaal:", kaal,"\npikkus:", pikkus, "\nvanus:", vanus)
print("--------------------")
print("Sinu ideaalkaaluks on:", format(ik, '.2f'))
print("Sinu rasvasuse % on:", format(rp, '.2f'))
print("Sinu tiheduseks on:", format(t, '.2f'))
print("Sinu ruumalaks on:", format(r, '.3f'))
print("Sinu pindalaks on:", format(p, '.3f'))
print("--------------------")
