<form action="{{ route('register') }}" class="sign-up" id="sign-up" method="POST">
    @csrf
    <div class="logo">
        <img src="{{ asset('images/login-register/Growtopia img.png') }}" alt="logo">
        <h4>Growtopia</h4>
    </div>
    <div class="heading">
        <h2>Get Started</h2>
        <h6>Already has an account?</h6>
        <a href="#" class="toggle">Sign In</a>
    </div>
    <div class="signin-form">
        <div class="inputs">
            <input type="text" class="input-box" id="name" name="name" autocomplete="off">
            <label for="name">Username</label>
        </div>
        <div class="error-msg-signup" id="name-error-signup"></div>
        <div class="inputs">
            <input type="text" class="input-box" id="email" name="email" autocomplete="off">
            <label for="email">Email</label>
        </div>
        <div class="error-msg-signup" id="email-error-signup"></div>
        <div class="inputs">
            <input type="text" class="input-box" id="nic" name="nic" autocomplete="off">
            <label for="nic">NIC</label>
        </div>
        <div class="error-msg-signup" id="nic-error-signup"></div>
        <div class="inputs">
            <input type="password" class="input-box" id="password" name="password" autocomplete="off">
            <label for="password">Password</label>
        </div>
        <div class="error-msg-signup" id="password-error-signup"></div>
        <button type="submit" class="signin-btn signup">Sign Up</button>

        <p class="text">By clicking the "Sign Up" button, you agree to be
            bound by the terms and conditions of our Growtopia <a href="#">Terms of Service</a>
            and
            <a href="#">Privacy Policy</a>.
        </p>
    </div>
</form>
