#include <iostream>

using namespace std;
/*Erstelllen Sie ein Programm zur Auswertung Ihrer Pr�fung.
Nach Eingabe der erreichten Punkte soll als Auswertung aif dem Bildschirm BESTANDEN oder DURCHGEFALLEN stehen.
Hinweis: Die Maximalpunktzahl ist dem Programmierer nicht bekannt. Bestanden: mindestens 50%
*/

int main()
{
   float maximum_score, score;

  cout<<"Maximalpunktzahl: ";
  cin>>maximum_score;

  cout<<"Erreichte Punktzahl: ";
  cin>>score;

  if ( score >= maximum_score*0.5 ) {
  	cout<<"BESTANDEN!";
  }
  	else {
  		cout<<"DURCHGEFALLEN!";
  	}

  getchar();
  return 0;
}
