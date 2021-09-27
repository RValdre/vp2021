maksimum = int(input("Sisesta KT maksimum punktide väärtus!: "))

a_counter = 0
b_counter = 0 
c_counter = 0 
d_counter = 0 
e_counter = 0 
f_counter = 0

vastus = "j"

while vastus == "j":
    tulemus = int(input("Sisesta õpilase KT tulemus!: "))
    protsent = (tulemus * 100) / maksimum
    if protsent >= 91 and protsent <= 100:
        print("Õpilane sai KT hindeks A")
        a_counter += 1
    if protsent < 91 and protsent >= 81:
        print("Õpilane sai KT hindeks B")
        b_counter += 1
    if protsent < 81 and protsent >= 71:
        print("Õpilane sai KT hindeks C")
        c_counter += 1
    if protsent < 71 and protsent >= 61:
        print("Õpilane sai KT hindeks D")
        d_counter += 1
    if protsent < 61 and protsent >= 51:
        print("Õpilane sai KT hindeks E")
        e_counter += 1
    if protsent < 51:
        print("Õpilane kukkus KT läbi")
        f_counter += 1
    vastus = str(input("Kas on veel KT tulemusi ? [j/e]"))
    if vastus != "j":
        continue
print("Hinde A-i said " + str(a_counter) + " õpilast")
print("-----------------------------")
print("Hinde B-i said " + str(b_counter) + " õpilast")
print("-----------------------------")
print("Hinde C-i said " + str(c_counter) + " õpilast")
print("-----------------------------")
print("Hinde D-i said " + str(d_counter) + " õpilast")
print("-----------------------------")
print("Hinde E-i said " + str(e_counter) + " õpilast")
print("-----------------------------")
print("Hinde F-i said " + str(f_counter) + " õpilast")
print("-----------------------------")