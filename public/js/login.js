const inputs = document.querySelectorAll(".input-box");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach(input => {
    input.addEventListener("focus", () => {
        input.classList.add("active");
    });
    input.addEventListener("blur", () => {
        (input.value === "")? input.classList.remove("active") : 0;
    });
});

toggle_btn.forEach(btn => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    })
});


function moveSlider(){
    let index = this.dataset.value;

    let currentImage = document.querySelector(`.img${index}`);
    images.forEach(img => img.classList.remove("show"));
    currentImage.classList.add("show");

    const textSlider = document.querySelector(".text-group");
    textSlider.style.transform = `translateY(${(index-1)*-2.2}rem)`;

    bullets.forEach(bullet => bullet.classList.remove("active"));
    this.classList.add("active");
}

bullets.forEach(bullet => {
    bullet.addEventListener("click", moveSlider);
});


function startImageRotation() {
    let index = 1;
    let intervalId;
    intervalId = setInterval(() => {
        if (index === 3) {
        index = 1;
        } else {
        index++;
        }

        const currentImage = document.querySelector(`.img${index}`);
        images.forEach(img => img.classList.remove("show"));
        currentImage.classList.add("show");

        const textSlider = document.querySelector(".text-group");
        textSlider.style.transform = `translateY(${(index-1)*-2.2}rem)`;

        bullets.forEach((bullet, i) => {
        if (i === index - 1) {
            bullet.classList.add("active");
        } else {
            bullet.classList.remove("active");
        }
        });
    }, 3500);
}

startImageRotation();



// Resistration validation

//Variables
const signUpForm = document.getElementById('sign-up');
const errorMsgs = document.querySelectorAll('.error-msg-signup');
const nameError = document.getElementById('name-error-signup');
const emailError = document.getElementById('email-error-signup');
const nicError = document.getElementById('nic-error-signup');
const passError = document.getElementById('password-error-signup');


signUpForm.addEventListener('submit', function(event) {

    errorMsgs.forEach(error => error.classList.remove('error'));
    errorMsgs.forEach(error => error.textContent="");

    let isValid = true;

    // Name validation
    let name = document.getElementById('name');
    if (name.value.trim() == "") {
        nameError.textContent = 'Field cannot left empty.';
        nameError.style.display = 'block';
        nameError.classList.add('error');
        isValid = false;
    }else if(name.value.length < 8){
            nameError.textContent = 'Name must be at least 8 characters.';
            nameError.style.display = 'block';
            nameError.classList.add('error');
            isValid = false;
        }

    //Email Vlidation
    const email = document.getElementById('email');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email.value === ''){
        emailError.textContent = 'Field cannot left empty.';
        emailError.style.display = 'block';
        emailError.classList.add('error');
        isValid = false;
    }
    else if (!emailPattern.test(email.value)) {
        emailError.textContent = 'Please enter a valid email address.';
        emailError.style.display = 'block';
        emailError.classList.add('error');
        isValid = false;
    }

    // NIC validation
    const nic = document.getElementById('nic');
    const nicPatternOld = /^[0-9]{9}[vVxX]$/;
    const nicPatternNew = /^[0-9]{12}$/;
    if (nic.value === ''){
        nicError.textContent = 'Field cannot left empty.';
        nicError.style.display = 'block';
        nicError.classList.add('error');
        isValid = false;
    }
    else if (!nicPatternOld.test(nic.value) && !nicPatternNew.test(nic.value)) {
        nicError.textContent = 'Please enter a valid NIC number.';
        nicError.style.display = 'block';
        nicError.classList.add('error');
        isValid = false;
    }

    // Password validation
    let pass = document.getElementById('password');
    if (pass.value.trim() == "") {
        passError.textContent = 'Field cannot left empty.';
        passError.style.display = 'block';
        passError.classList.add('error');
        isValid = false;
    }else if(name.value.length < 8){
            passError.textContent = 'Password must be at least 8 characters.';
            passError.style.display = 'block';
            passError.classList.add('error');
            isValid = false;
        }

    if (isValid) {
        this.submit();
    }else{
        event.preventDefault();
    }
});

// End Resistration validation


// Start Login Validation

//Variabls
const signInForm = document.getElementById('sign-in');
const errorMsgsLogin = document.querySelectorAll('.error-msg-signin');
const emailErrorLogin = document.getElementById('email-error-signin');
const passErrorLogin = document.getElementById('pass-error-signin');


signInForm.addEventListener('submit', function(event) {
    errorMsgsLogin.forEach(error => error.classList.remove('error'));
    errorMsgsLogin.forEach(error => error.textContent="");

    let isValid = true;

    //Email Vlidation
    const emailLogin = document.getElementById('login-email');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(emailLogin.value === ''){
        emailErrorLogin.textContent = 'Field cannot left empty.';
        emailErrorLogin.style.display = 'block';
        emailErrorLogin.classList.add('error');
        isValid = false;
    }
    else if (!emailPattern.test(emailLogin.value)) {
        emailErrorLogin.textContent = 'Please enter a valid email address.';
        emailErrorLogin.style.display = 'block';
        emailErrorLogin.classList.add('error');
        isValid = false;
    }

    // Password validation
    let passLogin = document.getElementById('login-password');
    if (passLogin.value.trim() == "") {
        passErrorLogin.textContent = 'Field cannot left empty.';
        passErrorLogin.style.display = 'block';
        passErrorLogin.classList.add('error');
        isValid = false;
    }else if(passLogin.value.length < 8){
            passErrorLogin.textContent = 'Password must be at least 8 characters.';
            passErrorLogin.style.display = 'block';
            passErrorLogin.classList.add('error');
            isValid = false;
        }

    if (isValid) {
        this.submit();
    }else{
        event.preventDefault();
    }
});
// End login Validations
