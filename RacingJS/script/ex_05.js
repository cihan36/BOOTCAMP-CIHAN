window.addEventListener("load", () =>{

let button = document.querySelectorAll("footer div button");
let button_plus = button[0];
let button_moins = button[1];
let font_size = 16;
let body = document.querySelector("body");
let background_color = document.querySelector("footer div select");
let div = document.querySelector("footer div");

button_plus.addEventListener("click", ()=>{

font_size++;
body.style.fontSize = font_size+'px';

});
button_moins.addEventListener("click", ()=>{

    font_size--;
    body.style.fontSize = font_size+'px';
    if(font_size < 1);
    fsize == 1;
    body.style.fontSize = font_size + 'px';

});
background_color.addEventListener("input", ()=>{

    div.style.backgroundColor = background_color.value;
})





})