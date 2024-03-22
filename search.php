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
        <a href="welcome.php">Back to User Main</a>
        <a href="#">Recipes</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>

   

    <section>
        <h2>Search Recipes</h2>
        <form action="" method="post">
            <label for="searchRecipe">Search by Name:</label>
            <input type="text" id="searchRecipe" class="form-control" name="searchRecipe" required>
            <button type="submit" name="btnSearch" class="btn btn-primary">Search</button>
        </form>

        <?php
        // Your server config and database connection
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "recipeDB";
        $conn = mysqli_connect($server, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Search functionality
        if (isset($_POST["btnSearch"])) {
            $searchRecipe = $_POST["searchRecipe"];
            $query = "SELECT * FROM tblrecipes WHERE RecipeTitle LIKE '%$searchRecipe%'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<h3>Search Results:</h3>";
                    echo "<table class='table table-bordered'>";
                    echo "<tr><th>Recipe Title</th><th>Ingredients</th><th>Instructions</th><th>Image</th><th>Action</th></tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['RecipeTitle'] . "</td>";
                        echo "<td>" . $row['Ingredients'] . "</td>";
                        echo "<td>" . $row['Instructions'] . "</td>";
                        echo "<td><img src='" . $row['ImagePath'] . "' alt='Recipe Image' style='max-width: 100px; max-height: 100px;'></td>";
                        echo "<td><a href='view_recipe.php?id=" . $row['id'] . "' class='btn btn-info'>View Details</a></td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No recipes found.";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
        ?>
    </section>

    <!-- Remaining Sections... -->

    <footer>
        <p>© 2024 Faithful Recipes. All rights reserved.</p>
    </footer>

    <!-- Add your scripts and other footer content here -->

</body>
</html>