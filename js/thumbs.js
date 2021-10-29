document.addEventListener('DOMContentLoaded',() => {
  const thumbs_a = document.querySelectorAll(".thumbs-rating-up");
  const thumbs_b = document.querySelectorAll(".thumbs-rating-down");
  let up = "";
  let down = "";

  if (thumbs_a.length > 0 || thumbs_b.length > 0) {
    let id = thumbs_a[0].attributes[1].value.match(/\d+(?=,)/)[0];
    up = localStorage.getItem(`thumbsrating${id}-1`) === "true";
    down = localStorage.getItem(`thumbsrating${id}-2`) === "true";
  }

  if (thumbs_a.length > 0) {
    for (let item of thumbs_a) {
      if (up) item.classList.add("thumbs-rating-voted");
      item.addEventListener("click", () => addEvent(item));
    }
  }
  if (thumbs_b.length > 0) {
    for (let item of thumbs_b) {
      if (down) item.classList.add("thumbs-rating-voted");
      item.addEventListener("click", () => addEvent(item));
    }
  }

  function addEvent(item) {
    let votedBlc = document.querySelectorAll(".thumbs-rating-voted");

    if (votedBlc.length > 0) {
      let voted = item.parentElement.querySelector(
          ".thumbs-rating-already-voted"
      );
      voted.classList.add("thumbs-rating-show");
      setTimeout(() => (voted.style.opacity = "0"), 2000);
      setTimeout(() => {
        voted.classList.remove("thumbs-rating-show");
        voted.style.opacity = "1";
      }, 2600);
    } else {
        item.classList.add("thumbs-rating-voted")
    }
  }
} )