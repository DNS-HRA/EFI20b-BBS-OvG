#include <iostream>

int main() {
    //variable declaration
    double price, taxes, discount, zws;

    //configure 2 separate input streams:

    //input price
    std::cout << "Bitte geben sie den aktuellen Preis ein: ";
    std::cin >>price;

    //input taxes
    std::cout << "Bitte geben sie den aktuellen Steuersatz ein: ";
    std::cin >>taxes;

    // calculation:

    //remaining taxes
    zws= 100 - taxes;
    taxes = zws / 100;

    // discount for remaining price
    discount=price*taxes;


    //output
    std::cout << "Ihr neuer Preis ist: " << discount << std::endl;
    return 0;
}
