#include <iostream>
#include <conio.h>
#include <stdlib.h>
#include <string.h>
using namespace std;
int main(){
	bool fin = false, confi = true;
	int opc, i, j, opc2, cantidad[100], acu = 0, precio[100], refe[100], refe_b, vector = 100;
	char conf;
	string nom_producto[vector][100];
	system("title Proyecto Decimo");
	while(fin == false){
		cout<<" * * Aplicacion Garochoa * *"<<endl;
		cout<<"1. Registro productos"<<endl;
		cout<<"2. Actualizar productos"<<endl;
		cout<<"3. Salir"<<endl;
		cout<<"Inserte la opcion -> "; cin>>opc;
		system("cls");
		switch(opc){
			case 1:
				if(acu == 0 or acu < 0){cout<<"Error: no hay productos registrados"<<endl; fin = true;}
				else{
					cout<<" * * Registro de productos * * "<<endl;
					for(i = 0; i < acu; i++){
						cout<<"-------------------------------"<<endl;
						cout<<"Referencia: "<<refe[i]<<endl;
						cout<<"Producto: "<<nom_producto[100][i]<<endl;
						cout<<"Precio: "<<precio[i]<<" $COP"<<endl;
						cout<<"Cantidad dispolinble: "<<cantidad[i]<<endl;
						cout<<"Ganancias totales: "<<precio[i] * cantidad[i]<<endl<<endl;
					}
				}
			break;
			case 2:
				cout<<" * * Actializacion de productos * * "<<endl;
				cout<<"1. Agregar productos"<<endl;
				cout<<"2. Eliminar productos"<<endl;
				cout<<"3. Menu principal"<<endl;
				cout<<"Inserte la opcion -> "; cin>>opc2;
				switch(opc2){
					case 1:
						cout<<"-------------------------------"<<endl;
						cout<<"Referencia (000000 - 999999): "; cin>>refe[acu];
						cout<<"Nombre del producto: "; cin>>nom_producto[vector][acu];
						cout<<"Cantidad disponible: "; cin>>cantidad[acu];
						cout<<"Precio por unidad ($COP): "; cin>>precio[acu];
						acu++;
						cout<<" <-> Producto exitosamente guardado! :) <-> "<<endl<<endl;
						fin = false;
					break;
					case 2:
						if(acu == 0 or acu < 0){cout<<"Error: no hay productos registrados"<<endl; fin = true;}
						else{
							cout<<"Ingrese la referencia: "; cin>>refe_b;
							for(i = 0; i < acu; i++){
								if(refe_b == refe[i]){
									refe[i] = 0;
									nom_producto[i][i] = " ";
									precio[i] = 0;
									cantidad[i] = 0;
									acu--;
									cout<<" <-> Producto exitosamente eliminado! :) <-> "<<endl;
								}
								else{confi = false;}
							}
							if(confi == false){cout<<"Error: no se encuentra el producto"<<endl;}
						}
					break;
				}
			break;
			case 3:
				cout<<"Esta seguro (S/N)?"; cin>>conf;
				if(conf == 'S' or conf == 's'){fin = true;}
				else if(conf == 'N' or conf == 'n'){fin = false;}
			break;
			}
		}
	cout<<"Que tenga un buen dia (precione una tecla para finalizar)";
	getch();
	return 0;
}