/*
Entwickeln Sie ein Programm, das die Anzahl der Jahre berechnet,
die man warten muss, bis man aufgrund einer einmaligen Einlage
und eines konstanten Zinssatzes Million�r geworden ist.
*/
#include <iostream>
using namespace std;
int main()
{

  // define veriables
  float deposit, interest_rate, result;


  cout<<"Gewuenschter Endbetrag: ";
  cin>>result;

  cout<<"Hoehe der Einmaleinlage: ";
  cin>>deposit;

  cout<<"Zinssatz: ";
  cin>>interest_rate;

  //define starting point of the counter
  int counter = 0;


  while (deposit <= result) {

    //calculate percentage
    deposit = deposit + (deposit * interest_rate / 100);

    //count how many times the loop has been executed
    ++counter;
  }

  //print out the result
  cout << "Bis zum gewuenschten Betrag dauert es " << counter << " Jahre \n";

  getchar();
  return 0;

}
