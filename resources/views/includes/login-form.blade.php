
<form action="{{ route('login') }}" method="POST" class="sign-in" id="sign-in">
    @csrf
    <div class="logo">
        <img src="{{ asset('images/login-register/Growtopia img.png') }}" alt="logo">
        <h4>Growtopia</h4>
    </div>
    <div class="heading">
        <h2>Welcome Back</h2>
        <h6>Not registered yet?</h6>
        <a href="#" class="toggle">Sign Up</a>
    </div>
    <div class="signin-form">
        <div class="inputs">
            <input type="text" name="email" class="input-box" id="login-email" autocomplete="off">
            <label for="name">Email</label>
        </div>
        <div class="error-msg-signin" id="email-error-signin"></div>
        <div class="inputs">
            <input type="password" name="password" class="input-box" id="login-password" autocomplete="off">
            <label for="password">Password</label>
        </div>
        <div class="error-msg-signin" id="pass-error-signin"></div>
        <button type="submit" value="Sign In" class="signin-btn">Sign in</button>

        <p class="text">Forgot your password?
            <a href="#">Get help</a> signing in.
        </p>
    </div>
</form>
