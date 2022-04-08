class MobileMenu {
    constructor() {
        this.mobileMenuDiv = document.querySelector("#burger");
        this.mobileMenuIcon = document.querySelector("#burger__middle");
        this.mobileMenuClose = document.querySelector("#mobile-menu");
        this.events();
    }

    events(){
        this.mobileMenuDiv.addEventListener('click', () => {
            this.toggleMenu();
            console.log('div clicked');
        });
    }
    toggleMenu(){
        this.mobileMenuIcon.classList.toggle("header__burger__middle--active");
        this.mobileMenuClose.classList.toggle("mobile-menu--close");
    }
}

export default MobileMenu;