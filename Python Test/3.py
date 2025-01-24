# Algoritma untuk menentukan bilangan genap berdasarkan pola pengamatan
def cek_genap(angka):
    if angka % 2 == 0:
        return "Genap"
    else:
        return "Ganjil"

print(cek_genap(4))  # Output: Genap
print(cek_genap(8))  # Output: Ganjil
