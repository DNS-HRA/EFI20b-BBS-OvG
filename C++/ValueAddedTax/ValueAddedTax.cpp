#include <iostream>
using namespace std;
int main()
{
  float price, ValueAddedTax, currentValueAddedTax;
  cout<<"Preis eingeben: ";
  cin>>price;

  cout<<"Mehrwertsteuer eingeben: ";
  cin>>currentValueAddedTax;

  ValueAddedTax = currentValueAddedTax * price / 100;
  cout<<price - ValueAddedTax;

  getchar();
  return 0;
}
