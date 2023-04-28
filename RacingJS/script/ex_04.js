window.addEventListener("load", ()=>{

    let div = document.querySelector("footer div");
    let str = ""; //not culotte
    
    window.addEventListener(("keydown"), (keyboard)=>{
 
        str += keyboard.key;
       div.innerText = str.slice(-42);

    })

})