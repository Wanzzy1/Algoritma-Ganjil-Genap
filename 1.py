def tambah(a, b):
    return a + b

def kurang(a, b):
    return a - b

def kali(a, b):
    return a * b

def bagi(a, b):
    if b != 0:
        return a / b
    else:
        return "Tidak bisa dibagi dengan nol."

def kalkulator():
    print("=== Program Kalkulator Sederhana ===")
    while True:
        print("\nPilih operasi:")
        print("1. Penjumlahan")
        print("2. Pengurangan")
        print("3. Perkalian")
        print("4. Pembagian")
        print("5. Keluar")
        
        pilihan = input("Masukkan pilihan (1/2/3/4/5): ")

        if pilihan == '5':
            print("Terima kasih telah menggunakan program.")
            break

        angka1 = float(input("Masukkan angka pertama: "))
        angka2 = float(input("Masukkan angka kedua: "))

        if pilihan == '1':
            hasil = tambah(angka1, angka2)
            operasi = "Penjumlahan"
        elif pilihan == '2':
            hasil = kurang(angka1, angka2)
            operasi = "Pengurangan"
        elif pilihan == '3':
            hasil = kali(angka1, angka2)
            operasi = "Perkalian"
        elif pilihan == '4':
            hasil = bagi(angka1, angka2)
            operasi = "Pembagian"
        else:
            print("Pilihan tidak valid.")
            continue

        print(f"Hasil {operasi} dari {angka1} dan {angka2} adalah: {hasil}")

kalkulator()