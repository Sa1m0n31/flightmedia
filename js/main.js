/* Change menu background */
const siteHeader = document.querySelector(".header");
window.addEventListener("scroll", () => {
   siteHeader.style.background = "#000";
       siteHeader.style.width = "100%";
       siteHeader.style.maxWidth = "none";
       if(window.innerWidth > 1700) siteHeader.style.padding = "20px calc((100vw - 1600px) / 2)";
       else siteHeader.style.padding = "20px 5%";
   if(window.pageYOffset === 0) {
       siteHeader.style.background = "transparent";
       siteHeader.style.maxWidth = "1600px";
       if(window.innerWidth > 800)  {
           siteHeader.style.width = "90%";
           siteHeader.style.padding = "20px 0";
       }
   }
});

/* Portfolio menu */
/* INFO - filtrowanie na podstwie atrybutu alt w img */
const categoriesList = ['Wszystkie', 'Luftfoto', 'Bedrifts reklamer', 'Eiendom', 'Bryllup', 'Droneinspeksjon'];
const changePortfolio = n => {
    /* Change menu underline */
    const menuElements = document.querySelectorAll(".portfolio__menu__item");
    const menuElementToUnderline = document.querySelector(".portfolio__menu__item:nth-child(" + n + ")");
    menuElements.forEach(item => {
        item.classList.remove("portfolio__menu__item--active");
    });
    menuElementToUnderline.classList.add("portfolio__menu__item--active");

    /* Change portfolio items */
    const portfolioItems = document.querySelectorAll(".portfolio__item");
    const portfolioImgs = document.querySelectorAll(".portfolio__item>.portfolio__img");
    const portfolioOverlay = document.querySelector(".portfolio__overlay");
    portfolioImgs.forEach(item => {
       if(n === 1) {
           portfolioOverlay.style.opacity = "1";
           portfolioOverlay.style.zIndex = "2";
           setTimeout(() => {
               portfolioOverlay.style.opacity = "0";
               portfolioOverlay.style.zIndex = "-1";
               item.parentElement.style.display = "block";
           }, 1000);
       }
       else {
           if(item.getAttribute("alt") !== categoriesList[n-1]) {
               portfolioOverlay.style.opacity = "1";
               portfolioOverlay.style.zIndex = "2";
               setTimeout(() => {
                   portfolioOverlay.style.opacity = "0";
                   portfolioOverlay.style.zIndex = "-1";
                   item.parentElement.style.display = "none";
               }, 1000);
           }
           else {
               setTimeout(() => {
                   item.parentElement.style.display = "block";
                   item.parentElement.style.opacity = "1";
               }, 400);
               // setTimeout(() => {
               //     item.parentElement.style.display = "block";
               // }, 1000);
           }
       }
    });
}

/* Mobile menu */
const mobileMenu = document.querySelector(".topMenu__mobile");
const mobileMenuItems = document.querySelectorAll(".topMenu__mobile>li");
const mobileMenuCloseBtn = document.querySelector(".topMenu__close");
const mobileMenuHamburger = document.querySelector(".topMenu__hamburger");

const openMobileMenu = () => {
    mobileMenuCloseBtn.style.display = "block";
    mobileMenuHamburger.style.display = "none";
    mobileMenu.style.height = "auto";
    mobileMenu.style.padding = "40px 10px 10px";
    mobileMenuItems.forEach(item => {
       item.style.display = "flex";
       item.style.opacity = "1";
    });
}

const closeMobileMenu = () => {
    mobileMenuItems.forEach(item => {
        item.style.opacity = "0";
    });
    setTimeout(() => {
        mobileMenuItems.forEach(item => {
            item.style.display = "none";
        });
    }, 300);
    mobileMenuCloseBtn.style.display = "none";
    mobileMenuHamburger.style.display = "flex";
    mobileMenu.style.height = "0";
    mobileMenu.style.padding = "0";
}