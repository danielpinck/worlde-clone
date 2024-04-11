import random
wort_liste = ["TISCH", "LAMPE", "RASEN", "KARTE", "BLUME",
              "LEERE", "WOLKE", "STERN", "GLANZ", "FLUSS",
              "KREIS", "BLATT", "TRAUM", "RUNDE", "LACHS",
              "PFEIL", "OZEAN", "MUSIK", "GESTE"]
wort_liste_len = len(wort_liste)
gesuchtes_wort = wort_liste[random.randint(0,wort_liste_len)]
print(gesuchtes_wort)

versuche = 0
test_input = ""

while gesuchtes_wort != test_input:
    test_input = input("Probiere ein 5-stelliges Wort: ")
    test_input = test_input.upper()
    test_input_liste = []
    for i in test_input:
        test_input_liste.append(i.capitalize())
    test_liste = []
    for i in gesuchtes_wort:
        test_liste.append(i)
    result_liste = [" ", " ", " ", " ", " "]
    liste_len = 0
    while liste_len < len(result_liste):
        if test_liste[liste_len] == test_input_liste[liste_len]:
            del result_liste[liste_len]
            result_liste.insert(liste_len, test_liste[liste_len])
        liste_len += 1
    liste_len = 0
    vorhanden_liste = []
    while liste_len < len(result_liste):
        for i in range(len(result_liste)):
            if test_liste[i] == test_input_liste[liste_len] and vorhanden_liste.count(test_liste[i]) < 1:
                vorhanden_liste.append(test_liste[i])
        liste_len += 1
    versuche += 1

    print(f"Diese Buchstaben kommen vor {sorted(vorhanden_liste)}")
    print(result_liste)

if gesuchtes_wort == test_input:
    print(f"Glückwunsch. {versuche} Versuche")

