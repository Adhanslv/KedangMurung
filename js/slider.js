const cardSlider = document.querySelector(".cardSlider");

let pressed = false;
let startX = 0;

cardSlider.addEventListener("mousedown", function (e) {
  pressed = true;
  startX = e.clientX;
  this.style.cursor = "grabing";
});

window.addEventListener("mouseleave", function (e) {
  pressed = false;
});

window.addEventListener("mouseup", function (e) {
  pressed = false;
  cardSlider.style.cursor = "grab";
});

window.addEventListener("mouseleave", function (e) {
  if (!pressed) {
    return;
  }

  this.scrolleft += startX - e.clientX;
});
