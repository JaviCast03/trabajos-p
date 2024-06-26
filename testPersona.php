<?php 
/*
Implementar una clase Persona con los atributos: nombre, apellido, tipo y número de documento.
a) Defina en la clase los siguientes métodos:
1. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
4. Crear un script Test_Persona que cree un objeto Persona e invoque a cada uno de los
métodos implementados.
b) Realizar las modificaciones necesarias en la clase CuentaBancaria (Ejercicio 14 del TP1) para que en
vez de contener como atributo el DNI del dueño de la cuenta tenga una referencia a las clase Persona
*/
include "persona.php";
include_once "banco.php";
$persona= new Persona("Javier","Castillo","Masculino",123456);
$cuenta= new Cuenta(101,$persona,10000,52);

echo $cuenta;
echo "Tu saldo actualizado: ".$cuenta->actualizarSaldo()."\n";
echo "Has depositado: ".$cuenta->depositar(500)."\n";
