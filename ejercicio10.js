let form10 = document.querySelector("#form10");
let boton = document.querySelector("#btnForm");
let input = document.querySelector("#cnum")
let numerosArray = [];

form10.addEventListener("submit", async (e)=>{
    e.preventDefault();
    let numero = parseFloat(input.value);

    if (numero !== 0) {
        numerosArray.push(numero); 
    };

    let data = {
        nume: numerosArray,
    };

    let config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    };

    let res = await (await fetch("ejercicio10.php", config)).text();
    document.querySelector("#dcm").innerHTML = res;
    form10.reset();
});

input.addEventListener("input",()=>{
    if (input.value === "0") {
        input.value == "";
    };
});