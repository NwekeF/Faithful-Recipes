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
        <a href="home.php"><i class="fas fa-home"></i>Home</a>
        <a href="ViewUsers.php"><i class="fas fa-book"></i>Users Reports</a>
        <a href="viewRecipes.php"><i class="fas fa-info-circle"></i> Recipes Report</a>
        <a href="#"><i class="fas fa-envelope"></i> Contact</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div id="content">
        <!-- Your main content goes here -->

        <h1>Welcome ADMINISTRATOR</h1>
      
  <!-- Display the table here -->
  <table class="table table-bordered table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Recipe Name</th>
                    <th>Category</th>
                    <th>Ingredients</th>
                </tr>
            </thead>
            <tbody>
  
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

// Fetch recipes from the database
$query = "SELECT * FROM tblrecipes";
$result = mysqli_query($conn, $query);

// Check for query execution errors
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!-- Display the table here -->

<?php
// Display the fetched data in a table
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
                        echo "<td>" . $row['RecipeTitle'] . "</td>";
                        echo "<td>" . $row['Ingredients'] . "</td>";
                        echo "<td>" . $row['Instructions'] . "</td>";
                        echo "<td><img src='" . $row['ImagePath'] . "' alt='Recipe Image' style='max-width: 100px; max-height: 100px;'></td>";
                        echo "<td><a href='view_recipe.php?id=" . $row['id'] . "' class='btn btn-info'>View Details</a></td>";
                        echo "</tr>";
}

// Close the database connection
mysqli_close($conn);
?>

    </tbody>
</table>