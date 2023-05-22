let  fiveForm = document.querySelector("#form5");

fiveForm.addEventListener("submit", async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config = {
        method : "POST",
        headers : {"Content-Type":"application/json"},
        body: JSON.stringify(data)
    };
    let res = await(await fetch("ejercicio5.php", config)).text();
    document.querySelector("#fv").innerHTML = res;
    fiveForm.reset();
});