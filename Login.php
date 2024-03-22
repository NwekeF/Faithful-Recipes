<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', true);
$server = "localhost";
$username = "root";
$password = "";
$dbname = "recipeDB";
$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btnlogin'])) {
    $usernameOrEmail = mysqli_real_escape_string($conn, $_POST['login_username']);
    $password = mysqli_real_escape_string($conn, $_POST['login_password']);

    // Hash the password for comparison
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM tbluser WHERE Username = '$usernameOrEmail' AND Passwords = '$hashedPassword'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usernameOrEmail;
            echo '<script>window.location.href = "welcome.php";</script>';

            exit();
        } else {
            $loginError = "Invalid password";
        }
    } else {
        $loginError = "Invalid username or error in database";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>

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
               <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="login_username">Username or Email:</label>
            <input type="text" class="form-control" id="login_username" name="login_username" required>
        </div>
        <div class="form-group">
            <label for="login_password">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="login_password" name="login_password" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-eye" id="toggleLoginPassword"></i>
                    </span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <label> <a href="Register.php">not Registered Yet?</a></label>
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