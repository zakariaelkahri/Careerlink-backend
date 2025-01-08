// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");
let selectentr = document.getElementById("selectentr");
let entrepriseinput  = document.getElementById("entreprise");
function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("click", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
}

selectentr.addEventListener("change",()=>{

  if(selectentr.value == 0 || selectentr.value == 2 ){

    entrepriseinput.style.display = "none";

  }else{

    entrepriseinput.style.display = "flex";


  }

})

