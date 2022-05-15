/*
Reveal on scroll function using IntersectionObserver API.
1. HTML class for full containers and parts of containers (.home-page-el like IMG or TEXT).
2. InteresectionObserver initiated with function and threshold/root options.
3. "observerCallbackF" function loops over each entry and in case intersecting removes hiding functions.
    Then observer is ended called unobserve method.
4. Hiding classes are added on load and also intersectionObserver is initiated. 
*/
class HomePage {
    constructor(){
        this.allContainers = document.querySelectorAll('.container--home');
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
            if(entry.target.classList.contains('container--home')){
                entry.target.classList.remove('container--scroll-hide');
            }
            if(entry.target.classList.contains('home-page-el')){
                entry.target.classList.remove('home-page-el--hide');
            }
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
