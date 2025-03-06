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

window.addEventListener('scroll', (e)=>{
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const body = document.querySelector('body');
    if(scrollTop > 30){
        body.classList.add('scroll');
    }else{
        body.classList.remove('scroll');
    }
});