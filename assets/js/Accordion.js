/*
Expand-collapse accordion.
1. In constructor all elements with class selected.
2. Toggle method for each nodelist el called.
3. Toggle method is simple click event listener which select specific element and toggles CSS class.
4. Entry (or the selected element) also gets its class toggled.
*/
class Accordion {
    constructor(){
        this.accordionItem = document.querySelectorAll('.accordion-item');
        this.toggleAccordion();
    }
    toggleAccordion(){
        this.accordionItem.forEach(function(entry){
            entry.addEventListener('click', function(){
                entry.querySelector('.accordion-item__hidden-box').classList.toggle('accordion-hide-content');
                entry.classList.toggle('accordion-item--open');
            });
        });
    }

};
export default Accordion;