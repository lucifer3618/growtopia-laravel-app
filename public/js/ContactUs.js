const inputs = document.querySelectorAll(".contact-input");

inputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.parentNode.classList.add("focus");
        input.parentNode.classList.add("not-empty");
    });
    input.addEventListener('blur', () => {
        if(input.value == ""){
            input.parentNode.classList.remove("not-empty");
        };
        input.parentNode.classList.remove("focus");
    });
});

//Variables
const form = document.getElementById('contact-form');
const inputsAll = document.querySelectorAll(".contact-input")
const errorMsgs = document.querySelectorAll('.error');
const firstNameError = document.getElementById('firstName-error');
const lastNameError = document.getElementById('lastName-error');
const phoneError = document.getElementById('phone-error');
const emailError = document.getElementById('email-error');
const msgError = document.getElementById('msg-error');


form.addEventListener('submit', function(event) {

    errorMsgs.forEach(error => error.classList.remove('error'));
    errorMsgs.forEach(error => error.textContent="");
    inputsAll.forEach(input => input.classList.remove('error-input'))

    let isValid = true;

    // First Name validation
    let firstName = document.getElementById('firstName');
    if (firstName.value.trim() == "") {
        firstNameError.textContent = 'Field cannot left empty.';
        firstNameError.style.display = 'block';
        firstNameError.classList.add('error');
        firstName.classList.add("error-input");
        isValid = false;
    }

    // Last Name validation
    let lastName = document.getElementById('lastName');
    if (lastName.value.trim() == "") {
        lastNameError.textContent = 'Field cannot left empty.';
        lastNameError.style.display = 'block';
        lastNameError.classList.add('error');
        lastName.classList.add("error-input");
        isValid = false;
    }

    //Phone Validation
    const phone = document.getElementById('phone');
    const phonePatter = /^(?:\+94|0)7[0-9]{8}$/;
    if(phone.value === ''){
        phoneError.textContent = 'Field cannot left empty.';
        phoneError.style.display = 'block';
        phoneError.classList.add('error');
        phone.classList.add("error-input");
        isValid = false;
    }
    else if (!phonePatter.test(phone.value)) {
        phoneError.textContent = 'Please enter a valid phone number.';
        phoneError.style.display = 'block';
        phoneError.classList.add('error');
        phone.classList.add("error-input");
        isValid = false;
    }


    //Email Vlidation
    const email = document.getElementById('email');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email.value === ''){
        emailError.textContent = 'Field cannot left empty.';
        emailError.style.display = 'block';
        emailError.classList.add('error');
        email.classList.add("error-input");
        isValid = false;
    }
    else if (!emailPattern.test(email.value)) {
        emailError.textContent = 'Please enter a valid email address.';
        emailError.style.display = 'block';
        emailError.classList.add('error');
        email.classList.add("error-input");
        isValid = false;
    }

      // Last Name validation
      let msg = document.getElementById('msg');
      if (msg.value.trim() == "") {
          msgError.textContent = 'Field cannot left empty.';
          msgError.style.display = 'block';
          msgError.classList.add('error');
          msg.classList.add("error-input");
          isValid = false;
      }

    if (isValid) {
        this.submit();
    }else{
        event.preventDefault();
    }
});
