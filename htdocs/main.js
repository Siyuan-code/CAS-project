// function openNav() {
//   document.getElementById("mySide-menu").style.width = "250px";
//   document.getElementById("main").style.marginLeft = "85px";
//   document.getElementById("myMain-content").style.backgroundColor =
//     "rgba(0,0,0,0.4)";
// }

// function closeNav() {
//   document.getElementById("mySide-menu").style.width = "0";
//   document.getElementById("main").style.marginLeft = "5";
//   document.getElementById("myMain-content").style.backgroundColor = "black";
// }

const text = document.querySelector(".fancy");
const strText = text.textContent;
const splitText = strText.split("");
text.textContent = "";

for (let i = 0; i < splitText.length; i++) {
  text.innerHTML += "<span>" + splitText[i] + "</span>";
}

let char = 0;
let timer = setInterval(onTick, 50);

function onTick() {
  const span = text.querySelectorAll("span")[char];
  span.classList.add("fade");
  char++;
  if (char === splitText.length) {
    complete();
    return;
  }
}

function complete() {
  clearInterval(timer);
  timer = null;
}

// const texts = ["websites", "illustrations", "pancakes"];
// let count = 0;
// let index = 0;
// let currentText = "";
// let letter = "";

// (function type() {
//   if (count === texts.length) {
//     count = 0;
//   }
//   currentText = texts[count];
//   letter = currentText.slice(0, ++index);

//   document.querySelector(".typing").textContent = letter;
//   if (letter.length === currentText.length) {
//     count++;
//     index = 0;
//   }
//   setTimeout(type, 200);
// })();

window.onload = function () {
  const effect = document.querySelector(".mission");
  // console.log(effect);
  window.addEventListener("scroll", scrollEffect);
  function scrollEffect() {
    if (window.scrollY >= 500) {
      effect.style.opacity = "1";
      effect.style.transform = "translateX(20px)";
      effect.style.transition = "1s ease-in-out";
    } else {
      effect.style.opacity = "0";
      effect.style.transform = "translateX(-50px)";
    }
  }
  scrollEffect();
};
