function openNav() {
  document.getElementById("mySide-menu").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
  document.getElementById("myMain-content").style.backgroundColor =
    "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySide-menu").style.width = "0";
  document.getElementById("main").style.marginLeft = "5";
  document.getElementById("myMain-content").style.backgroundColor = "white";
}

// var btnContainer = document.ge4¥tElementById("myShop");
// var btns = btnContainer.getElementsByClassName("btns");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function () {
//     var current = document.getElementsByClassName("btns");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }
