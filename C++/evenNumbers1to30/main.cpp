#include <iostream>

int main() {
    // Define variable for condition
    int x = 0;

    // Define loop with condition for ending it
    while (x <= 30) {
        // unnessary check for even number (wanted by teacher???)
        // you could just add +2 to x to get just even numbers (in this case)
        if(x%2==0)
            {
            //Print x to output stream
            std::cout << x << "\n";
            }

        //add +1 to x to avoid infinite loop
        x = x + 1;
    }
    return 0;
}