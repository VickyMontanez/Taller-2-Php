let  twoForm = document.querySelector("#form2");

twoForm.addEventListener("submit", async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config = {
        method : "POST",
        headers : {"Content-Type":"application/json"},
        body: JSON.stringify(data)
    };
    let res = await(await fetch("ejercicio2.php", config)).text();
    document.querySelector("span").innerHTML = res;
    twoForm.reset();
})
