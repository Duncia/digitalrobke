//Importing main SCSS file.
import "../assets/scss/style.scss"

//Modules and classes
import MobileMenu from "../assets/js/MobileMenu";
import HomePage from "../assets/js/HomePage";
import Accordion from "../assets/js/Accordion";
import LazyLoadingImg from "../assets/js/LazyLoadingImg";

//Instantiate new object using modules and classes
const mobileMenu = new MobileMenu();
const homePage = new HomePage();
const accordion = new Accordion();
const lazyLoadingImg = new LazyLoadingImg();