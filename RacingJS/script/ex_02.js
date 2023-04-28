window.addEventListener("load", ()=>{
   let click = 0;
   let div = document.querySelector("footer div");
   div.onclick=()=>{

    click++;
    div.innerText = click;
   }
   
})