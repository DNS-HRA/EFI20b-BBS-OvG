#include <iostream>
const double limit = 0.5;

int main() {
   //Variablen deklaration
   double max, punktzahl,prozent, note;

   //Eingabe
   std::cout << "Bitte geben sie die Maximalpunktzahl der Arbeit ein: ";
   std::cin >> max;

   std::cout << "Bitte geben sie ihre Punktzahl ein: ";
   std::cin >> punktzahl;

   //prozent errechnen
   prozent = (punktzahl/max)*100;

   note = (prozent > 90) ? 1 : (prozent>80) ? 2 : 3 ;

   //Ausgabe

   std::cout << note;
    return 0;
}
