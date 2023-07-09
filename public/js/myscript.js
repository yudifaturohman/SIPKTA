const hamburgerMenu = document.querySelector(".hamburger-menu");
const title = document.querySelector(".title");
const menuList = document.querySelector("header nav");
const header = document.querySelector("header");
const fixnav = header.offsetTop;
const linkMenu = document.querySelectorAll("header nav ul li a");

window.onscroll = () => {
  if (window.pageYOffset > fixnav) {
    header.classList.add("navbar-fixed");
  } else {
    header.classList.remove("navbar-fixed");
  }
};
hamburgerMenu.addEventListener("click", function () {
  hamburgerMenu.classList.toggle("hamburger-active");
  menuList.classList.toggle("hidden");
});
