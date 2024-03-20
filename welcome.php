<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Faithful Recipes</title>
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

        #sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            left: -250px;
            background-color: #444;
            transition: 0.3s;
            overflow-y: auto;
        }

        #content {
            margin-left: 10px; /* Adjusted margin to create space */
            transition: 0.3s;
            padding: 15px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        #sidebar a i {
            margin-right: 10px;
            color: #000; /* Black color when collapsed */
        }

        #toggle-btn {
            position: fixed;
            left: 10px;
            top: 10px;
            z-index: 2;
            cursor: pointer;
            font-size: 20px;
            color: black; /* Black color when collapsed */
        }

        #toggle-btn:hover {
            color: #ccc;
        }

        #sidebar a:hover {
            background-color: #777;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="search.php"><i class="fas fa-book"></i> Search Recipes</a>
        <a href="recipe.php"><i class="fas fa-info-circle"></i> Add Recipes</a>
        <a href="#"><i class="fas fa-envelope"></i> Contact</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="content">
        <!-- Your main content goes here -->

        <h1>Welcome to Faithful Recipes!</h1>
      

<div class="jumbotron jumbotron-fluid" style="background-image: url('images/desert.jpg'); background-size: cover; background-position: center; color: white;">
    <div class="container">
        <h1 class="display-4">Dessert Delights</h1>
        <p class="lead">Indulge in heavenly desserts that will satisfy your sweet tooth cravings.</p>
        <hr class="my-4">
        <p>Discover a world of delightful sweets and treats with our dessert recipes.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Treat Yourself</a>
    </div>
</div>

<div class="jumbotron" style="background-image: url('images/vegetarian.jpg'); background-size: cover; color: white; background-position: center">
    <h1 class="display-4">Vegetarian Vibes</h1>
    <p class="lead">Explore a variety of flavorful vegetarian recipes for a wholesome and delicious diet.</p>
    <hr class="my-4">
    <p>Embrace the goodness of plant-based ingredients with our vegetarian recipes.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Go Veggie</a>
</div>

<div class="jumbotron jumbotron-fluid" style="background-image: url('images/international.jpg'); background-size: cover; color: white;">
    <div class="container">
        <h1 class="display-4">International Flavors</h1>
        <p class="lead">Embark on a culinary journey with our collection of international recipes from different cuisines.</p>
        <hr class="my-4">
        <p>Experience the rich and diverse flavors of global cuisine in your own kitchen.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Travel Through Taste</a>
    </div>
</div>
    </div>

    <div id="toggle-btn">
        <i class="fas fa-bars"></i>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('toggle-btn').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');

            if (sidebar.style.left === '0px') {
                sidebar.style.left = '-250px';
                content.style.marginLeft = '10px'; /* Adjusted margin to create space */
            } else {
                sidebar.style.left = '0px';
                content.style.marginLeft = '250px';
            }
        });
    </script>
</body>
</html>
