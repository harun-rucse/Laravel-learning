import "./bootstrap";

const hamburger = document.getElementById("hamburger");
const nav_link = document.getElementById("nav_links");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav_link.classList.toggle("active");
});

console.log("demo js file working....................");
