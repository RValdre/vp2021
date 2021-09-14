import math

kaal = int(input("Sisesta kaal: "))
pikkus = int(input("Sisesta pikkus: "))
vanus = int(input("Sisesta vanus: "))
print("\n\n")

#Ideaalkaal
ik_mees = (3 * pikkus - 450 + vanus) * 0.25 + 45
ik_naine = (3 * pikkus - 450 + vanus) * 0.225 + 40.5

#Rasvaprotsent
rp_mees = ((kaal - ik_mees) / kaal) * 100 + 15
rp_naine = ((kaal - ik_naine) / kaal) * 100 + 22

#Tihedus
t_mees = 8.9 * rp_mees + 11 * (100 - rp_mees)
t_naine = 8.9 * rp_naine + 11 * (100 - rp_naine)

#Ruumala
r_mees = kaal / t_mees
r_naine = kaal / t_naine

#Pindala
p_mees = (1000 * kaal) ** ((35.75 - math.log(kaal, 10)) / 53.2) * ((pikkus ** 0.3) / 3118.2)
p_naine = (1000 * kaal) ** ((35.75 - math.log(kaal, 10)) / 53.2) * ((pikkus ** 0.3) / 3118.2)

print("kaal:", kaal,"\npikkus:", pikkus, "\nvanus:", vanus)
print("--------------------")
print("ideeaalkaal  mehele:", format(ik_mees, '.2f'), "\tnaisele:", format(ik_naine, '.2f'))
print("rasvasuse %  mehele:", format(rp_mees, '.2f'), "\tnaisele:", format(rp_naine, '.2f'))
print("tihedus      mehele:", format(t_mees, '.2f'), "\tnaisele:", format(t_naine, '.2f'))
print("ruumala      mehele:", format(r_mees, '.3f'), "\tnaisele:", format(r_naine, '.3f'))
print("pindala      mehele:", format(p_mees, '.3f'), "\tnaisele:", format(p_naine, '.3f'))
print("--------------------")