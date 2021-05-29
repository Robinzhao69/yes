let navButton = document.querySelector(".icon")
const items = document.querySelector(".nav-items");
let state = false;


navButton.addEventListener("click", () => {
  if(items.className === "nav-items") {
    items.className = "nav-items active";
    console.log("yes");
  } else {
    items.className = "nav-items";
  }
});

