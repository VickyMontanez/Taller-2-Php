let form4 = document.querySelector("#form4");

form4.addEventListener("submit", async (e) => {
    e.preventDefault();
    /* Tomo todos los inputs con esta caracteristica en dos variables*/
    let nombres = document.querySelectorAll("input[name='nombre[]']");
    let edades = document.querySelectorAll("input[name='edad[]']");
    
    /* Declaro dos variables y con el método Array.from() convierto los elementos seleccionados en un arreglo; */
    /* con el método map() itero los arrays para seleccionar el valor */
    let nombresArray = Array.from(nombres).map(input => input.value);
    let edadesArray = Array.from(edades).map(input => parseInt(input.value));
        
    /* Declaro el objeto data y a lar keys "nombres" y "edades" les asigno su respectivo array */
    let data = {
        nombres: nombresArray,
        edades: edadesArray
    };
    
    /* Luego, paso esa data en formato JSON desde el config */
    let config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    };
    
    /* Y lo relaciono con el documento de php */
    let res = await (await fetch("ejercicio4.php", config)).text();
    document.querySelector("#ct").innerHTML = res;
    form4.reset();
});
