print("##############################")
print("*****   TUGAS BAGIAN 1   *****")
print("*****     ANANDA ZAKA 	*****")
print("##############################")

nama = input ("Masukkan Nama :")
umur = int(input ("Masukkan Umur :")) 
gaji = int(input ("Masukkan Gaji :"))

if umur >= 21 and gaji >= 3000000:
	lanjut = input(f"Hai {nama}, Anda Sesuai dan memenuhi syarat. Mau Lanjut?")
	if lanjut == "y" or "Y":
		print("GASS")
		
else:
	print(f"Maaf {nama}, anda tidak memenuhi syarat. Silahkan Naikan gaji dan umur")
