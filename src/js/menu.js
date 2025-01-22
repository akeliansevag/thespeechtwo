const sideMenu = document.getElementById("side-menu");
const sideMenuOverlay = document.getElementById("side-menu-overlay");
const body = document.getElementsByTagName("body")[0];
document.getElementById("hamburger").addEventListener("click",()=>{    
    body.classList.add("open");
});

document.getElementById("close-side-menu").addEventListener("click",()=>{
    closeMenu();
});

sideMenuOverlay.addEventListener("click",()=>{
    closeMenu();
})

const closeMenu = () => {
    body.classList.remove("open");
};