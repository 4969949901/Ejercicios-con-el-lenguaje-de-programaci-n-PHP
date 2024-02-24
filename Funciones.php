<?php
//Helen Acevedo Tobar Programacion III   carne 0909-21-1802

class Funciones{
    #Estructuras de control condicionales (IF - IF ELSE):
    //primera funcion para calcular la edad por medio de fecha de nacimeinto
    public function calcularEdad($fechaNacimiento){
        $fechaActual =date("Y-m-d"); // fecha en year-month-day
        $edad=date_diff(date_create($fechaNacimiento),date_create($fechaActual))->y;
        return $edad;
    }
    #Calcular cuál es el mayor de dos números
    public function calcularNumeroMayor($primerNumero,$segundoNumero){
        if ($primerNumero>$segundoNumero){
            return $primerNumero;
        }else if($segundoNumero>$primerNumero){
            return $segundoNumero;
        }else {
            return "Los números son iguales";
        }
    }

    #Determianr cual numero es par o impar

    public function determinarParImpar($numero){
        if($numero %2==0){
            return " Par";
        }else {
            return "impar";
        }
    }
    #Estructuras de control Iterativas ( FOR - WHILE):
    // Calcular el factorial de un número usando un bucle while

    public function calcularFactorial($numeroBase){
        $factorial=1;
        $i=$numeroBase;
        while($i>0){
            $factorial *=$i;
            $i--;
        }
        return $factorial;
    }

    #Ordenar 20 numeros que se generen aleatorios y ordenarlos de mayor a menor con ciclo for
    public function ordenarNumeros($cantiNumeros){
        $numeros=[];
        for ($i=0;$i<$cantiNumeros;$i++){
            $numeros[]=rand(1,200); //rand genera un entero de manera aleatoria
        }
        rsort($numeros);//rsort-->Esta función ordena un array en orden inverso (mayor a menor).
        return $numeros;
    }


        #Array Asociatividad y Foreach
    public function alumnos()
    {
        $alumnos = array(
            array('alumno' => 'Margarita', 'curso' => 'Matematias', 'nota' => 90),
            array('alumno' => 'Jessi', 'curso' => 'Ciencias Sociales', 'nota' => 80),
            array('alumno' => 'Michel', 'curso' => 'Artes Plasticas', 'nota' => 72),
            array('alumno' => 'Manuel', 'curso' => 'Ciencias Naturales', 'nota' => 92),
            array('alumno' => 'Jose Luis', 'curso' => 'Programacion', 'nota' => 93),
            array('alumno' => 'Carlos', 'curso' => 'Economia', 'nota' => 79),
            array('alumno' => 'Jorge', 'curso' => 'Contabilidad', 'nota' => 74),
            array('alumno' => 'Angel', 'curso' => 'Educacion FIsica', 'nota' => 89),
            array('alumno' => 'Aureliana', 'curso' => 'Computacion', 'nota' => 82),
            array('alumno' => 'Emilio', 'curso' => 'Derecho', 'nota' => 99)

        );
        echo "==========================================<br>";
        echo "Datos de los alumnos: <br>";
        foreach ($alumnos as $alumno){
            echo"Nombre: " . $alumno ['alumno']. ", Curso: " . $alumno ['curso'] . ", Nota: " . $alumno ['nota'] . "<br>";

        }
    }

}


$funciones = new Funciones();
echo "=====================================<br>";
echo "La edad es de: " . $funciones ->calcularEdad("1999-07-29") . "años<br>";
echo "======================================<br>";
echo "El numero mayor entre dos numeros es :" . $funciones ->calcularNumeroMayor(30,90) . "<br>";
echo "======================================<br>";
echo "El numero es: " . $funciones ->determinarParImpar(43) . "<br>";
echo "======================================<br>";
echo "Factorial de un numero: " . $funciones ->calcularFactorial(15) . "<br>";
echo "======================================<br>";
echo "Números ordenados de mayor a menor son : " . implode(",",$funciones ->ordenarNumeros(20)) . "<br>";
$funciones ->alumnos();
