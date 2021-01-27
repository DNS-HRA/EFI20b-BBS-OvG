#include <iostream>

using namespace std;

int main()
{
  unsigned short int choice;

  //variables for saving the entered numbers
  double x, y;

  cout << "Enter Number 1: ";
  cin >> x;

  cout << "Enter Number 2: ";
  cin >> y;

   // printing out menu options
  cout << "Please enter wanted type of calculation"<<"\n"
              << "1 ... +" << "\n"
              << "2 ... -" << "\n"
              << "3 ... *" << "\n"
              << "4 ... /" << "\n";

  cin >> choice;

    // Creating output for each calculation method and print output
    switch (choice) {

        case 1:
            cout << "The result of " << x << " + " << y << " is: " << ( x + y );
            break;

        case 2:
            cout << "The result of " << x << " - " << y << " is: " << ( x - y );
            break;

        case 3:
            cout << "The result of " << x << " * " << y << " is: " << ( x * y );
            break;

        case 4:
            cout << "The result of " << x << " / " << y << " is: " << ( x / y );
            break;

        default:
            cout << "ERROR";
            break;
    }



    return 0;

}
