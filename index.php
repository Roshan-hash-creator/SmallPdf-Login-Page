<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmallPdf - Login Page</title>
    <link rel="stylesheet" href="style.css">
    <!-- BOOTSTRAP ICONS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <div id="background">
        <div class="login">
            <button onclick="show()">Login</button>
        </div>
    </div>
    <div class="container" id="container" style="display: none;">
        <div class="dismiss" onclick="dismiss()">
            <i class="bi bi-x-lg"></i>
        </div>
        <div class="newUser">
            <p>Don't have an account?<span>Sign up</span></p>
        </div>
        <div class="body">
            <h1>Log in to Smallpdf</h1>
            <div class="google">
                <img src="Images/google logo.png" alt="">
                <p>Continue with Google</p>
            </div>
            <div class="facebook">
                <img src="Images/facebook_icon.svg" alt="">
                <p>Continue with Facebook</p>
            </div>
            <p>or</p>
            <form action="form.php" method="post">
                <div class="input">
                    <i class="bi bi-envelope"></i>
                    <div class="input-box">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="input">
                    <i class="bi bi-lock"></i>
                    <div class="input-box">
                        <input type="password" name="password" id="password" required maxlength="15">
                        <label for="password">Password</label>
                    </div>
                </div>
                <button type="submit" name="submit">Log in</button>
                <p><span>
                        Forgot your password?
                    </span>
                </p>
            </form>
        </div>
    </div>

</body>

<script>
    let container = document.getElementById('container');
    let bg = document.getElementById('background')
    const dismiss = () => {
        container.style.display = "none";
        bg.style.display = "block";
    }
    const show = () => {
        bg.style.display = "none";
        container.style.display = "block";
    }
</script>

</html>