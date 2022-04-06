class MobileMenu {
    constructor() {
        this.mobileMenuDiv = document.querySelector("#burger");
        this.mobileMenuIcon = document.querySelector("#burger__middle");
        this.events();
    }

    events(){
        this.mobileMenuDiv.addEventListener('click', () => {
            this.toggleMenu();
            console.log('div clicked');
        })
    }
    toggleMenu(){
        this.mobileMenuIcon.classList.toggle("header__burger__middle--active");
    }
}

export default MobileMenu;