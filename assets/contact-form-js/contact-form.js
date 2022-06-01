const contactForm = document.querySelector('#main-contact-form');
const contactFormName = document.querySelector('#main-contact-form__name');
const contactFormEmail = document.querySelector('#main-contact-form__email');
const contactFormMessage = document.querySelector('#main-contact-form__message');
const submitFormBtn = document.querySelector('#main-contact-form__submit');

const labelMsgName = document.querySelector('#label-name');
const errorMsgName = document.querySelector('#error-name');
const labelMsgEmail = document.querySelector('#label-email');
const errorMsgEmail = document.querySelector('#error-email');
const labelMsgMessage = document.querySelector('#label-message');
const errorMsgMessage = document.querySelector('#error-message');

//Email validation function.
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

if(contactForm !== null){
    contactForm.addEventListener('submit', (e) => {
        if(contactFormName.value === "") {
            e.preventDefault();
            errorMsgName.classList.remove('display-none');
            contactFormName.classList.add('error-border');
            labelMsgName.classList.add('display-none');
        } else {
            errorMsgName.classList.add('display-none');
            contactFormName.classList.remove('error-border');
            labelMsgName.classList.remove('display-none');
        }
        if(contactFormEmail.value === "" || validateEmail(contactFormEmail.value) == false) {
            e.preventDefault();
            errorMsgEmail.classList.remove('display-none');
            contactFormEmail.classList.add('error-border');
            labelMsgEmail.classList.add('display-none');
        } else {
            errorMsgEmail.classList.add('display-none');
            contactFormEmail.classList.remove('error-border');
            labelMsgEmail.classList.remove('display-none');
        }
        if(contactFormMessage.value === "") {
            e.preventDefault();
            errorMsgMessage.classList.remove('display-none');
            contactFormMessage.classList.add('error-border');
            labelMsgMessage.classList.add('display-none');
        } else {
            errorMsgMessage.classList.add('display-none');
            contactFormMessage.classList.remove('error-border');
            labelMsgMessage.classList.remove('display-none');
        }
    })
};