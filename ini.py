print("Selecciona un idioma/")

idiomas = {
    1: "language (Inglés)",
    2: "语言 (Chino mandarín, yǔyán)",
    3: "lenguaje (Español)",
    4: "langue (Francés)",
    5: "Sprache (Alemán)",
    6: "لغة (Árabe, lugha)",
    7: "linguagem (Portugués)",
    8: "язык (Ruso, yazyk)",
    9: "言語 (Japonés, gengo)",
    10: "भाषा (Hindi, bhāṣā)"
}


print(f" 1: language (Inglés)\n 2: 语言 (Chino mandarín, yǔyán)\n 3: lenguaje (Español)\n 4: langue (Francés)\n 5: Sprache (Alemán)\n 6: لغة (Árabe, lugha)\n 7: linguagem (Portugués)\n 8: язык (Ruso, yazyk)\n 9: 言語 (Japonés, gengo)\n 10: भाषा (Hindi, bhāṣā)")
idioma=int(input("Ingresa que idioma"))


print(idiomas.get(idioma, "Idioma no encontrado"))

while True:
    if idioma == 1:
        print("You selected English.")
        print("Insert your Username: ")
        usernameEN = input("User Name: ")
        print("Insert your Password: ")
        passEN = input("Password: ")
        print("Welcome,", usernameEN)
        break
    elif idioma == 2:
        print("您选择了中文。")
    elif idioma == 3:
        print("Usted seleccionó español.")
    elif idioma == 4:
        print("Vous avez sélectionné le français.")
    elif idioma == 5:
        print("Sie haben Deutsch ausgewählt.")
    elif idioma == 6:
        print("لقد اخترت العربية.")
    elif idioma == 7:
        print("Você selecionou português.")
    elif idioma == 8:
        print("Вы выбрали русский язык.")
    elif idioma == 9:
        print("あなたは日本語を選択しました。")
    elif idioma == 10:
        print("आपने हिंदी चुनी।")
    else:
        print("Idioma no encontrado")