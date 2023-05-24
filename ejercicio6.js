let form6 = document.querySelector("#form6");
/* Se definin los arrays afuera de evento, PARA PODER ALMACENAR DATA */
let nombresArray = [];
let notasArray = [];
let sexoArray = [];

form6.addEventListener("submit", async (e) => {
    e.preventDefault();
    /* Se definen variables que tomen EL VALOR los inputs del formulario */
    let nombre = document.querySelector("input[name='nombre']").value;
    let nota = document.querySelector("#nota").value;
    let sexo = document.querySelector("select[name='sexo']").value;

    /* Se almacena la información conforme cambie el valor de los inputs y se ingresa a cada array */
    nombresArray.push(nombre);
    notasArray.push(nota);
    sexoArray.push(sexo);

    /* Se define la data que se va a pasar, es decir, un objeto con cada array anterior */
    let data = {
        nombres: nombresArray,
        notas: notasArray,
        sexos: sexoArray
    };

    /* Se coloca el método POST y se pasa la data al archivo de PHP se quiere */
    let config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    };

    /* Se envia la data al archivo y para mostrarla se muestra en una etiqueta HTML */
    let res = await (await fetch("ejercicio6.php", config)).text();
    document.querySelector("#stx").innerHTML = res;
    form6.reset();
});