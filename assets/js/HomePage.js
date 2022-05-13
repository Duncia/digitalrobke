/*
Reveal on scroll function using IntersectionObserver API.
*/
class HomePage {
    constructor(){
        this.allContainers = document.querySelectorAll('.container');
        this.allRevealedElements = document.querySelectorAll('.home-page-el');
        this.sectionObserver = new IntersectionObserver(this.observerCallbackF, {
            root: null,
            threshold: 0.15
        });
        this.observeF(this.sectionObserver);
        this.observeEl(this.sectionObserver);
    };
    observerCallbackF(entries, sectionObserver){
        entries.forEach(entry => {
            if(!entry.isIntersecting) return;
            if(entry.target.classList.contains('container')){
                entry.target.classList.remove('container--scroll-hide');
            }
            if(entry.target.classList.contains('home-page-el')){
                entry.target.classList.remove('home-page-el--hide');
            }
            console.log(entry.target);
            sectionObserver.unobserve(entry.target);
        });
    };
    observeF(sectionObserver){
        this.allContainers.forEach(function(container){
            sectionObserver.observe(container);
            container.classList.add('container--scroll-hide');
            if(container.classList.contains('intro') || container.classList.contains('hero')){
                container.classList.remove('container--scroll-hide');
            };
        })
    };
    observeEl(sectionObserver){
        this.allRevealedElements.forEach(function(el){
            sectionObserver.observe(el);
            el.classList.add('home-page-el--hide');   
        })
    };
}
export default HomePage;
