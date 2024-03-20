<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faithful Recipes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        nav {
            background-color: #444;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #555;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #777;
        }

        .carousel-item img {
            max-width: 100%;
            height: auto;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }
        .textheight{
            height: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Faithful Recipes</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Recipes</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>

   

    <section>
        <h2>Register User</h2>
        <br>
        <form action="insert.php" method="post">
        <div class="form-group">
            <label for="usernameType">Username Type:</label>
            <select class="form-control textheight" name="dprCat">
                    <option>Select User Type</option>
                    <option>Cook</option>
                    <option>Learner</option>
            </select>

        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control textheight" id="username" name="txtusername" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control textheight" id="email" name="txtemail" required>
        </div>
        <div class="form-group">
    <label for="password">Password:</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="txtpassword" required>
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="fa fa-eye" id="togglePassword"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="confirm_password">Confirm Password:</label>
    <div class="input-group">
        <input type="password" class="form-control" id="confirm_password" name="txtconfirm_password" required>
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="fa fa-eye" id="toggleConfirmPassword"></i>
            </span>
        </div>
    </div>
</div>
        <button type="submit" class="btn btn-primary form-control textheight" name="btnRegister">Register</button>
    </form>
    </section>

    <!-- Remaining Sections... -->

    <footer>
        <p>© 2024 Faithful Recipes. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
    document.getElementById('toggleConfirmPassword').addEventListener('click', toggleConfirmPasswordVisibility);

    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        passwordInput.type = (passwordInput.type === 'password') ? 'text' : 'password';
    }

    function toggleConfirmPasswordVisibility() {
        const confirmPasswordInput = document.getElementById('confirm_password');
        confirmPasswordInput.type = (confirmPasswordInput.type === 'password') ? 'text' : 'password';
    }
</script>
</body>
</html>