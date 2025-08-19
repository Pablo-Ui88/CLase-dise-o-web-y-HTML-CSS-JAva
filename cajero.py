saldo_cuenta=1000000
print("Bienvenido al cajero automático")
print("Ingresa tu PIN: ")
pin=int(input("Ingresa tu pin"))
pin_user=1234
while True:
    if pin == pin_user:
        break
    elif pin != pin_user:
        print("Comunicate con tu Banco...")
        break

while True:
    print("bienvenido")
    print("1, consultar saldo")
    print("2, retirar dinero")
    print("3, depositar dinero")
    print("4, salir")
    opcion = input("Seleccione una opción: ")
    if opcion == "1":
        print("Su saldo es:", saldo_cuenta)
    elif opcion == "2":
        cantidad = float(input("Ingrese la cantidad a retirar: "))
        if cantidad > saldo_cuenta:
            print("Fondos insuficientes.")
        else:
            saldo_cuenta -= cantidad
            print("Retiro exitoso.")
    elif opcion == "3":
        cantidad = float(input("Ingrese la cantidad a depositar: "))
        saldo_cuenta += cantidad
        print("Depósito exitoso.")
    elif opcion == "4":
        print("Gracias por usar el cajero.")
        break
    else:
        print("Opción no válida.")
# Conectar a la base de datos (o crearla si no existe)
import sqlite3
conexion = sqlite3.connect("cajero.db")
cursor = conexion.cursor()

# Crear tabla
cursor.execute("""
CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    saldo REAL NOT NULL
)
""")

# Insertar usuario (si quieres evitar duplicados, hazlo una sola vez)
cursor.execute("INSERT INTO usuarios (nombre, saldo) VALUES (?, ?)", ("Pablo", 1000))
conexion.commit()

# Consultar usuarios
cursor.execute("SELECT * FROM usuarios")
usuarios = cursor.fetchall()

print("Usuarios registrados en el cajero:")
for u in usuarios:
    print(u)

# Cerrar conexión
conexion.close()