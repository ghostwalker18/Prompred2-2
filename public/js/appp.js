let nav = document.getElementById("nav");
let b__nav = document.getElementById("nav__toggle");
b__nav.addEventListener("click", function () {
    console.log("fffff");
    nav.classList.toggle("is__visible");
});

let btn = document.querySelector(".active-date");
let wrap = document.getElementById("popupa-wrapper");
let popupa = document.getElementById("popupa");

btn.addEventListener("click", function () {
    console.log("ff");
    wrap.classList.toggle("off-wrap");
    popupa.classList.toggle("off-wrap");
});
d2.addEventListener("click", function () {
    wrap.classList.toggle("off-wrap");
    popupa.classList.toggle("off-wrap");
});
wrap.addEventListener("click", function () {
    wrap.classList.toggle("off-wrap");
    popupa.classList.toggle("off-wrap");
});
