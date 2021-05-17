let navButton = document.querySelector(".icon")
const links = document.querySelector(".nav-links");
let state = false;


navButton.addEventListener("click", () => {
  if(links.className === "nav-links") {
    links.className = "nav-links active"
  } else {
    links.className = "nav-links"
  }
});