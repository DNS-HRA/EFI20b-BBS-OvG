#include <iostream>
const double limit = 100;
const double versandkosten = 5.50;

int main() {
    // Variablen deklaration
    double rechnungsbetrag;

    // Eingabe
    std::cout << "Bitte geben sie den Bestellwert ein: ";
    std::cin >> rechnungsbetrag;

    // Einseitige Verzweigung
    if(rechnungsbetrag < limit) rechnungsbetrag += versandkosten;

    // Ausgabe
    std::cout << "Ihr Rechnungsbetrag ist: " << rechnungsbetrag << " Euro" << std::endl;
    return 0;

