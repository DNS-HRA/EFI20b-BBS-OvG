#include <iostream>

int main() {
            // Define variable for condition
            int x = 1;

            // Define loop with condition for ending it
            while (x <= 20) {
                //Print x to output stream
                std::cout<<x<<"\n";

                //add +1 to x to avoid infinite loop
                x = x + 1;
            }
    return 0;
}
