v_tund = int(input("Sisesta väljumise tund: "))
v_minut = int(input("Sisesta väljumise minutid: "))
s_tund = int(input("Sisesta saabumise tund: "))
s_minut = int(input("Sisesta saabumise minutid: "))

v_tund = v_tund * 60
s_tund = s_tund * 60

v_täisaeg = v_tund + v_minut
s_täisaeg = s_tund + s_minut

sõiduaeg = s_täisaeg - v_täisaeg
sõidu_tunnid = sõiduaeg // 60
sõidu_minutid = sõiduaeg % 60

print("Sõiduks läheb aega",sõidu_tunnid, "tundi ja",sõidu_minutid, "minutit !")
