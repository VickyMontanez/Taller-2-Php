let form8 = document.querySelector("#form8");

form8.addEventListener("submit", async (e)=>{
    e.preventDefault();
    let lado = document.querySelector("#cua").value;
    let base = document.querySelector("#bs").value;
    let altura = document.querySelector("#al").value;

    let data = {
        lados: lado,
        bases: base,
        altura: altura
    };

    let config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    };

    let res = await (await fetch("ejercicio8.php", config)).text();
    document.querySelector("#oct").innerHTML = res;
    form8.reset();
})