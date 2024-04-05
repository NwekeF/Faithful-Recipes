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
            background-color: #000; /* Black color */
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555; /* Darker shade of black */
        }

        .carousel-item img {
            max-width: 100%;
            height: auto;
        }

        .jumbotron {
            background-size: cover;
            background-position: center center;
            color: white;
        }

        .textheight {
            height: 50px;
        }

        .testimonial {
            border: 2px solid #555; /* Dark border color */
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .testimonial-author {
            font-style: italic;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        <h1>Faithful Recipes</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="Login.php">Recipes</a>
        <a href="AdminLoginsData.php">Administrator Login</a>
        <a href="#">Contact</a>
    </nav>

    <div class="jumbotron" style="background-image: url('images/Egusi-soup-Recipe-2.jpg');">
        <div class="container">
            <h1 class="display-4">Dessert Delights</h1>
            <p class="lead">Indulge in heavenly desserts that will satisfy your sweet tooth cravings.</p>
            <hr class="my-4">
            <p>Discover a world of delightful sweets and treats with our dessert recipes.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Treat Yourself</a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h3>Healthy Living</h3>
                <p>Explore nutritious recipes that promote a healthy lifestyle. Discover the benefits of wholesome ingredients and balanced meals.</p>
            </div>
            <div class="col-md-4">
                <h3>Quick & Easy</h3>
                <p>Busy schedule? Find delicious and time-efficient recipes for those on-the-go moments. Enjoy fantastic flavors without compromising on time.</p>
            </div>
            <div class="col-md-4">
                <h3>Sweet Indulgence</h3>
                <p>Satisfy your sweet tooth with delightful dessert recipes. From decadent cakes to tempting treats, discover the art of sweet indulgence.</p>
            </div>
        </div>
    </div>

    <!-- Carousel code here -->
    <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/international.jpg" class="d-block w-100" alt="Carousel Image 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 1</h5>
                <p>Some description for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/desert.jpg" class="d-block w-100" alt="Carousel Image 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 2</h5>
                <p>Some description for the second slide.</p>
            </div>
        </div>
        <!-- Add more carousel items as needed -->
    </div>
    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <!-- Rest of the code... -->
    <div class="container mt-4">
    <div class="row">
    <div class="col-md-6">
    <!-- Video Embed Code (Replace the video URL with the embed URL) -->
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/8J7wisUfuD4" frameborder="0" allowfullscreen></iframe>
</div>
        <div class="col-md-6">
            <h3>Customer Testimonials</h3>
            <div class="testimonial">
                <p>"Faithful Recipes has transformed my kitchen experience! The recipes are not only delicious but also easy to follow. I've never felt more confident and inspired to try new dishes."</p>
                <p class="testimonial-author">- John Doe</p>
            </div>
            <div class="testimonial">
                <p>"I can't express how much I appreciate the variety and simplicity of Faithful Recipes' recipes. They've made cooking enjoyable and helped me discover a newfound love for experimenting with flavors. Highly recommended for anyone seeking culinary delight!"</p>
                <p class="testimonial-author">- Jane Smith</p>
            </div>
            <!-- Add more testimonials as needed -->
        </div>
    </div>
</div>

    <footer>
        <p>© 2024 Faithful Recipes. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
