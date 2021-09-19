arv1 = int(input("Sisesta esimene arv: "))
arv2 = int(input("Sisesta teine arv: "))

if arv1 > arv2:
    suurem_arv = arv1
    väiksem_arv = arv2
else:
    väiksem_arv = arv1
    suurem_arv = arv2

if suurem_arv % väiksem_arv == 0:
    print("Suurem arv jagub väiksemaga !")
else:
    print("Suurem arv ei jagu väiksemaga !")