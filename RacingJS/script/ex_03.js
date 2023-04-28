window.addEventListener("load", () => {
    let div = document.querySelector("footer div");
    div.onclick=()=>{

      let name = prompt("What is your name ?");
      window.confirm( "Are you sure "+name+" is your name ?")
      window.alert("Hello "+name+" !")

    }
   
})