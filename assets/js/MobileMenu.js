/*
Mobile menu:
1. Burger (as container), burger_middle the middle line and mobile menu div selected.
2. Events method called (which includes click event listener and calls toggle menu method).
3. Toggle menu adds/removes CSS classes.
*/
class MobileMenu {
    constructor() {
        this.mobileMenuDiv = document.querySelector("#burger");
        this.mobileMenuIcon = document.querySelector("#burger__middle");
        this.mobileMenuClose = document.querySelector("#mobile-menu");
        this.mobileLogo = document.querySelector("#mobile-menu-open-logo");
        this.events();
    }

    events(){
        this.mobileMenuDiv.addEventListener('click', () => {
            this.toggleMenu();
        });
    }
    toggleMenu(){
        this.mobileMenuIcon.classList.toggle("header__burger__middle--active");
        this.mobileMenuClose.classList.toggle("mobile-menu--close");
        this.mobileMenuIcon.classList.toggle("header__burger__middle--open");
        this.mobileLogo.classList.toggle("mobile-menu-open-logo--hide");
    }
}

export default MobileMenu;