let a = document.querySelectorAll(".thumbs-rating-up");
let b = document.querySelectorAll(".thumbs-rating-down");
let up = ''
let down = ''

if (a.length > 0 || b.length > 0) {
  let id = a[0].attributes[1].value.match(/\d+(?=,)/)[0];
  up = localStorage.getItem(`thumbsrating${id}-1`) === "true";
  down = localStorage.getItem(`thumbsrating${id}-2`) === "true";
}

if (a.length > 0) {
  for (let item of a) {
    if (up) item.classList.add("thumbs-rating-voted");
  }
}
if (b.length > 0) {
  for (let item of b) {
    if (down) item.classList.add("thumbs-rating-voted");
  }
}


