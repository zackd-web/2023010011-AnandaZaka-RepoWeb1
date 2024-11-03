nama = input ("Masukkan Nama :")
umur = int(input ("Masukkan Umur :")) 
gaji = int(input ("Masukkan Gaji :"))  

if umur >= 21 and gaji >= 3000000:
	print(f"Hai {nama}, Anda Sesuai dan memenuhi syarat")
else:
	print(f"Maaf {nama}, anda tidak memenuhi syarat")