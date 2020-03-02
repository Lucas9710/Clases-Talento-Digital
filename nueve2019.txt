function mostrar() {

    var nombre;
    var nota;
    var sexo;
    var seguir;
    var contadorVaronesAprob = 0;
    var acumNotasMayor = 0;
    var acumNotasMenor = 0;
    var acumNotasAdolescente = 0;
    var acumNotasF = 0;
    var acumNotasM = 0;
    var contadorMayor = 0;
    var contadorMenor = 0;
    var contadorAdolescente = 0;
    var contadorF = 0;
    var contadorM = 0;
    var promedioMayor = 0;
    var promedioMenor = 0;
    var promedioAdolescente = 0;
    var promedioF = 0;
    var promedioM = 0;
    var nombreMayorNota;
    var sexoMayorNota;
    var mayorNotaAdolescente;
    var flag = 0;









    do {

        // ------------- pido datos --------------------
        nombre = prompt("Ingrese un nombre: ");

        nota = parseInt(prompt("Ingrese una nota entre 0 y 10: "));
        while (nota < 0 || nota > 10 || isNaN(nota)) {
            nota = parseInt(prompt("Nota invalida. Ingrese una nota entre 0 y 10: "));
        }
        sexo = prompt("Ingrese un sexo f o m: ");
        while (sexo != 'f' && sexo != 'm') {
            sexo = prompt("Sexo invalido. Ingrese una sexo f o m: ");
        }
        // ---- analisis de los datos ----------

        if (sexo == 'm' && nota >= 4) {
            contadorVaronesAprob++;
        }

        // --------------- Edad -------------------------
        if (edad >= 18) {
            // mayor
            acumNotasMayor = acumNotasMayor + nota;
            contadorMayor++;
        }
        else if (edad >= 13) {
            // adolescente
            acumNotasAdolescente = acumNotasAdolescente + nota;
            contadorAdolescente++;

            if (flag == 0 || nota > mayorNotaAdolescente) {
                mayorNotaAdolescente = nota;
                nombreMayorNota = nombre;
                sexoMayorNota = sexo;
                flag = 1;
            }
        }
        else {
            // menor
            acumNotasMenor = acumNotasMenor + nota;
            contadorMenor++;
        }

        // ----------------- Sexo --------------------

        if (sexo == 'm') {
            // varon
            acumNotasM = acumNotasM + nota;
            contadorM++;
        }
        else {
            // mujer
            acumNotasF = acumNotasF + nota;
            contadorF++;
        }



        // ------- pregunto si quiere continuar -----
        seguir = prompt("Quiere continuar?:");

    } while (seguir == 's');

    if (contadorMenor != 0) {
        promedioMenor = acumNotasMenor / contadorMenor;
    }
    if (contadorMayor != 0) {
        promedioMayor = acumNotasMayor / contadorMayor;
    }
    if (contadorAdolescente != 0) {
        promedioAdolescente = acumNotasAdolescente / contadorAdolescente;
    }
    if (contadorM != 0) {
        promedioM = acumNotasM / contadorM;
    }
    if (contadorMenor != 0) {
        promedioMenor = acumNotasMenor / contadorMenor;
    }
    if (contadorF != 0) {
        promedioF = acumNotasF / contadorF;
    }

    document.write("a) La cantidad de varones aprobados: " + contadorVaronesAprob + "</br>");
    document.write("b) El promedio de notas de los menores de edad: " + promedioMenor + "</br>");
    document.write("c) El promedio de notas de los adolescentes: " + promedioAdolescente + "</br>");
    document.write("d) El promedio de notas de los mayores: " + promedioMayor + "</br>");
    document.write("e) El promedio de notas por sexo masculino: " + promedioM + " y femenino: " + promedioF + "</br>");
    if (contadorAdolescente == 0) {
        document.write("No se ingresaron adolescentes");
    }
    else {
        document.write("f) Del adolescente con mayor nota el nombre es: " + nombreMayorNota + " y tiene sexo: " + sexoMayorNota + "</br>");
    }

}