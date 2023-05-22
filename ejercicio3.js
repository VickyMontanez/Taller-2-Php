
/* 3. Construir el algoritmo para determinar el voltaje de un circuito a partir de la resistencia y la intensidad de corriente */
let  threeForm = document.querySelector("#form3");

threeForm.addEventListener("submit", async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config = {
        method : "POST",
        headers : {"Content-Type":"application/json"},
        body: JSON.stringify(data)
    };
    let res = await(await fetch("ejercicio3.php", config)).text();
    document.querySelector("#th").innerHTML = res;
    threeForm.reset();
});