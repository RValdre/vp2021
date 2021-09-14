kapital = int(input("Sisesta raha kogus!: "))
kulu = int(input("Sisesta ostu kulud!: "))

raha_prst = kapital - kulu
print("--------------------")
print("Sa maksid",kapital," eurot, kaup maksis",kulu," eurot. Saad tagasi",raha_prst," eurot:")

if raha_prst % 500 >= 0:
    raha_lugeja = raha_prst // 500
    raha_prst = raha_prst - (raha_lugeja * 500)
    print(raha_lugeja," viiesajalist")
if raha_prst % 200 >= 0:
    raha_lugeja = raha_prst // 200
    raha_prst = raha_prst - (raha_lugeja * 200)
    print(raha_lugeja," kahesajalist")
if raha_prst % 100 >= 0:
    raha_lugeja = raha_prst // 100
    raha_prst = raha_prst - (raha_lugeja * 100)
    print(raha_lugeja," sajalist")
if raha_prst % 50 >= 0:
    raha_lugeja = raha_prst // 50
    raha_prst = raha_prst - (raha_lugeja * 50)
    print(raha_lugeja," viiekümnelist")
if raha_prst % 20 >= 0:
    raha_lugeja = raha_prst // 20
    raha_prst = raha_prst - (raha_lugeja * 20)
    print(raha_lugeja," kahekümnelist")
if raha_prst % 10 >= 0:
    raha_lugeja = raha_prst // 10
    raha_prst = raha_prst - (raha_lugeja * 10)
    print(raha_lugeja," kümnelist")
if raha_prst % 5 >= 0:
    raha_lugeja = raha_prst // 5
    raha_prst = raha_prst - (raha_lugeja * 5)
    print(raha_lugeja," viielist")
if raha_prst % 2 >= 0:
    raha_lugeja = raha_prst // 2
    raha_prst = raha_prst - (raha_lugeja * 2)
    print(raha_lugeja," kahelist")
if raha_prst % 1 >= 0:
    raha_lugeja = raha_prst // 1
    raha_prst = raha_prst - (raha_lugeja * 1)
    print(raha_lugeja," ühelist")
print("--------------------")
    