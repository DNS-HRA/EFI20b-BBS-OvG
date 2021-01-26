#include <iostream>
using namespace std;
int main()   
{ 
  float order_value, order_value2, transportation_cost;
  
  cout<<"Bestellwert eingeben: ";
  cin>>order_value;
  
  transportation_cost = 5.5;
  
  if (order_value < 100){
  	order_value2 = order_value + transportation_cost;
  	cout<<order_value2;
  }
  	else {
  	cout<<order_value;
  	}
   
  getchar();
  return 0; 
}