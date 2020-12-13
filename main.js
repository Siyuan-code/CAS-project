function openNav() {
  document.getElementById("mySide-menu").style.width = "250px";
  document.getElementById("main").style.marginLeft = "150px";
  document.getElementById("myMain-content").style.backgroundColor =
    "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySide-menu").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("myMain-content").style.backgroundColor = "white";
}
