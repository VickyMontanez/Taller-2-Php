let  myForm = document.querySelector("#myForm");

myForm.addEventListener("submit", async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config = {
        method : "POST",
        headers : {"Content-Type":"application/json"},
        body: JSON.stringify(data)
    };
    let res = await(await fetch("api.php", config)).text();
    document.querySelector("pre").innerHTML = res;
    console.log(res);
})

/* let myFormulario = document.querySelector("#myFormulario");
let myHeaders = new Headers({"Content-Type": "application/json"});
let config = {
    headers: myHeaders, 
};
myFormulario.addEventListener("submit", async(e)=>{
    e.preventDefault();
    config.method = "POST";
    let data = Object.fromEntries(new FormData(e.target));
    Object.entries(data).forEach((val,id)=>{console.log(val,id);});
    console.log(data);
    // config.body = JSON.stringify(data);
    // let res = await (await fetch("api.php", config)).text();
    // document.querySelector("pre").innerHTML = res;
    // console.log(res);
}) */