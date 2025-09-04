<?php
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TAC – Login</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <header class="header">
     

    </header>

    <main class="main">
        <section class="hero">
               <a class="logo" href="#">
            <img src="images/logo/logo.png" alt="TAC Logo" class="logo-img">
        </a>
            <h1>Learn.<span class="accent">Create</span>.Lead.</h1>
            <p>Empowering Creative Learning <span class="handle">@TheArtCode</span></p>
        </section>

        <section class="card" aria-label="Auth">
            <!-- LOGIN VIEW -->
            <div id="view-login" class="view active" role="region" aria-labelledby="login-title">
                <h3 id="login-title">Login</h3>
                <div class="welcome">Welcome to The Art Code</div>

                <form action="#" method="post">
                    <div class="form-row">
                        <label for="email">Email ID</label>
                        <input id="email" type="email" name="email" placeholder="Enter Your Email ID" required>
                    </div>

                    <div class="form-row">
                        <label for="password">Password</label>
                        <div class="password-wrap">
                            <input id="password" type="password" name="password" placeholder="Enter Your Password"
                                required>
                            <button class="eye" type="button" data-input="password"
                                aria-label="Show password">👁️</button>
                        </div>
                    </div>

                    <div class="form-inline">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" value="1"> Remember me
                        </label>
                        <a class="link" href="#">Forgot password?</a>
                    </div>

                    <button class="btn btn-primary" type="submit">Log In</button>
                    <div class="auth-switch">
                        <span>Don't have an account?</span>
                        <button class="link-btn" type="button" data-target="view-signup">Sign up</button>
                    </div>

                    <div class="legal">
                        By continuing, you agree to the TAC <a href="#">Terms of Service</a> and <a href="#">Privacy
                            Policy</a>.
                    </div>

                </form>
            </div>

            <!-- SIGNUP VIEW -->
            <div id="view-signup" class="view" role="region" aria-labelledby="signup-title">
                <h3 id="signup-title">Sign up</h3>
                <div class="welcome">Create your TAC account</div>

                <form action="#" method="post">
                    <div class="form-row">
                        <label for="su-username">Username</label>
                        <input id="su-username" type="text" name="username" placeholder="username" required>
                    </div>

                    <div class="form-row">
                        <label for="su-email">Email</label>
                        <input id="su-email" type="email" name="email" placeholder="hello@example.com" required>
                    </div>

                    <div class="form-row">
                        <label for="su-password">Password</label>
                        <div class="password-wrap">
                            <input id="su-password" type="password" name="password"
                                placeholder="Enter a strong password" required>
                            <button class="eye" type="button" data-input="su-password"
                                aria-label="Toggle password visibility">👁️</button>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Sign Up </button>

                    <div class="auth-switch">
                        <span>Already have an account?</span>
                        <button class="link-btn" type="button" data-target="view-login">Sign in</button>
                    </div>

                    <div class="legal">
                        By continuing, you agree to the TAC <a href="#">Terms of Service</a> and <a href="#">Privacy
                            Policy</a>.
                    </div>

                </form>
            </div>
        </section>
    </main>

    <script>
        // Switch views
        document.querySelectorAll('.link-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.view').forEach(v => v.classList.remove('active'));
                document.getElementById(btn.dataset.target).classList.add('active');
            });
        });

        document.querySelectorAll('.eye').forEach(btn => {
            const input = btn.dataset.input
                ? document.getElementById(btn.dataset.input)
                : btn.closest('.password-wrap')?.querySelector('input');
            if (!input) return;

            btn.setAttribute('aria-pressed', 'false');
            btn.addEventListener('click', () => {
                const show = input.type === 'password';
                input.type = show ? 'text' : 'password';
                btn.setAttribute('aria-pressed', show ? 'true' : 'false');
                btn.title = show ? 'Hide password' : 'Show password';
                // swap emoji
                btn.textContent = show ? '🙈' : '👁️';
            });
        });
    </script>


</body>

</html>