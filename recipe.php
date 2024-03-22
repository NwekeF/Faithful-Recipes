<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faithful Recipes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <a href="welcome.php">Back to User Main</a>
        <a href="home.php">Logout</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>

   

    <section>
        <h2>Add Reciepe</h2>
        <br>
       
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Recipe Category</label>
                <select class="form-control textheight" name="dprCat">
                    <option>Select Category</option>
                    <option>Appetizers</option>
                    <option>Soup & Stew</option>
                    <option>Dessert</option>
                    <option>Salads</option>
                    <option>Breverages</option>
                    <option>International Cuisine</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipe_title">Recipe Title:</label>
                <input type="text" class="form-control textheight" id="recipe_title" name="txtrecipe_title" required>
            </div>
            <div class="form-group">
                <label for="recipeImage">Recipe Image:</label>
                <input type="file" class="form-control-file" id="recipeImage" name="recipeImage" accept="image/*" onchange="previewSelectedImage(this)">
                <img id="previewImage" style="max-width: 100px; max-height: 100px; display: none;" alt="Preview Image">
            </div>
            <div class="form-group">
                <label for="video">Video File (IF ANY):</label><br>
                <input type="file" id="video" accept="video/*" required>
               
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients:</label>
                <textarea class="form-control" id="ingredients" name="txtingredients" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="instructions">Instructions:</label>
                <textarea class="form-control" id="instructions" name="txtinstructions" rows="6" required></textarea>
            </div>
            <button type="submit" name="btnAddRecipes" class="btn btn-primary">Add Recipe</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Faithful Recipes. All rights reserved.</p>
    </footer>

   
    <script>
        function previewSelectedImage(input) {
            const preview = document.getElementById("previewImage");
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = "block"; // Show the preview image
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function uploadVideo() {
    const fileInput = document.getElementById('video');
    const statusDiv = document.getElementById('status');

    if (fileInput.files.length > 0) {
        const videoFile = fileInput.files[0];
        const formData = new FormData();
        formData.append('video', videoFile);

        fetch('upload.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            statusDiv.innerHTML = data.message;
        })
        .catch(error => {
            console.error('Error:', error);
            statusDiv.innerHTML = 'An error occurred during the upload.';
        });
    } else {
        statusDiv.innerHTML = 'Please choose a video file to upload.';
    }
}
    </script>
    </section>

    <!-- Remaining Sections... -->

    <footer>
        <p>© 2024 Faithful Recipes. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>