let form9 = document.querySelector('#form9');

let finalistaArray = [];
let saltoArray = [];

form9.addEventListener("submit", async (e)=>{
    e.preventDefault();
    let finalista = document.querySelector("#name").value;
    let salto = parseFloat(document.querySelector("#rcd").value);

    finalistaArray.push(finalista);
    saltoArray.push(salto);

    let data = {
        participantes: finalistaArray,
        record: saltoArray
    };

    let config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    };

    let res = await (await fetch("ejercicio9.php", config)).text();
    document.querySelector("#nv").innerHTML = res;
    form9.reset();
})
