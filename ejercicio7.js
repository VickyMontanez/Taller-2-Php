let form7 = document.querySelector("#form7");

let articulosArray = [];
let cantidadArray = [];
let precioArray = [];

form7.addEventListener("submit", async (e)=>{
    e.preventDefault();
    let articulo = document.querySelector("#articulo").value;
    let precio = document.querySelector("#precio").value;
    let cantidad = document.querySelector("#cnt").value;
    
    articulosArray.push(articulo);
    cantidadArray.push(cantidad);
    precioArray.push(precio);

    let data = {
        articulo: articulosArray,
        cantidad: cantidadArray,
        precio: precioArray
    };

    let config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    };

    let res = await (await fetch("ejercicio7.php", config)).text();
    document.querySelector("#spt").innerHTML = res;
    form7.reset();
})