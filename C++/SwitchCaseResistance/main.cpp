#include <iostream>

int main() {
    // create variable for entering and saving menu position
    // unsigned = no leading bit for +/-
    // short int = at least 16 bit space | 0 to 65535
    unsigned short int choice;

    // create 3 variables for saving the single resistor
    double r1, r2, r3;

    std::cout << "Enter Resistor 1: ";
    std::cin >> r1;

    std::cout << "Enter Resistor 2: ";
    std::cin >> r2;

    std::cout << "Enter Resistor 3: ";
    std::cin >> r3;


    // print menue
    std::cout << "Please enter wanted Menue Point"<<"\n"
              << "1 ... Resistance in series connections" << "´\n"
              << "2 ... Resistance in parallel connections" << "\n";

    // Saving Menue Point for user choice
    std::cin >> choice;

    // Creating output stream for each menue point and print the correct output
    switch (choice) {
        // Output for case 1 with the resistance
        case 1:
            std::cout << "Your Resistance in series connection is: " << (r1 + r2 + r3);
            break;
            // Output for case 2 with resistance
        case 2:
            std::cout << "Your Resistance in parallel connection is: " << (1 / (1 / r1 + 1 / r2 + 1 / r3));
            break;
            //error correction (a little bit too late but better safe then sorry)
        default:
            std::cout << "ERROR, your PC will explode in 60 secounds for trying this!!!!!!";
            break;
    }
    return 0;
}
