print("##############################")
print("*****   TUGAS BAGIAN 1   *****")
print("*****     ANANDA ZAKA 	*****")
print("##############################")

nama = input ("Masukkan Nama :")
umur = int(input ("Masukkan Umur :")) 
gaji = int(input ("Masukkan Gaji :"))

if umur >= 21 and gaji >= 3000000:
	lanjut = input(f"Hai {nama}, Anda memenuhi syarat untuk pengajuan pinjaman. Mau lanjut pinjaman? y/n :")
	if lanjut == "y":
		pinjaman = input ("Masukkan jumlah pinjaman :")
		print(f"Selamat {nama} anda berhasil meminjam {pinjaman}")
	
	elif lanjut == "n":
		print(f"Terima Kasih {nama} atas waktunya")
else:
	print(f"Maaf {nama}, anda belum memenuhi syarat untuk pengajuan pinjaman. Silahkan Naikan gaji dan umur")
