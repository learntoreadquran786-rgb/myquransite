document.querySelectorAll(".card").forEach(card => {

    card.addEventListener("mouseenter", () => {

        card.style.transition = "0.4s";

    });

});
const menuBtn = document.getElementById("menuBtn");

const navbar = document.querySelector(".navbar");

menuBtn.addEventListener("click", ()=>{

    navbar.classList.toggle("active");

});