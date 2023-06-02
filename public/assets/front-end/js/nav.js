// ======NavBar======
window.addEventListener("scroll", function() {
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

// ======NavBar======
window.addEventListener("scroll", function() {
    const header = document.querySelector('.live-icon');
    header.classList.toggle('parent', window.scrollY > 0);
})

// Navigation Menu 
const menuBtn = document.querySelector(".fa-bars");
const closeBtn = document.querySelector(".fa-xmark");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    navigation.classList.add("active");
});

closeBtn.addEventListener("click", () => {
    navigation.classList.remove("active");
});