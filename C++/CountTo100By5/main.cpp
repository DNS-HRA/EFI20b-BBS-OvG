#include <iostream>

int main() {
    // Define variable for condition
    int x = 0;

    // Define loop with condition for ending it
    while (x <= 100) {
        //Print x to output stream
        std::cout<<x<<"\n";

        //add +5 (and just print every 5. number) to x to avoid infinite loop
        x = x + 5;
    }
    return 0;
}
