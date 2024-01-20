<?php
session_start();

// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vegetables";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['vote'])) {
    if ($_POST['vote'] == 'upvote') {
        $result = mysqli_query($conn, "UPDATE votes SET number_of_votes=number_of_votes+1 where id=" . ((int)$_POST['vegetable_id']));
    }
    if ($_POST['vote'] == 'downvote') {
        $result = mysqli_query($conn, "UPDATE votes SET number_of_votes=number_of_votes-1 where id=" . ((int)$_POST['vegetable_id']));
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vegetable Voting</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>

    <h1>Vegetable Voting</h1>

    <div class="grid-container">
        <?php

        // SQL query to select rows from the database
        $sql = "SELECT * FROM votes order by number_of_votes desc, id";
        $result = $conn->query($sql);

        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()): ?>
                <div class="vegetable">
                    <div class="vegetable-image"><img src="./img/vegetable-<?php echo $row['id']; ?>.png"
                                                      alt="<?php echo $row['name']; ?>"></div>
                    <div class="buttons-bar">
                        <div class="like-wrapper">
                            <form action="index.php" method="post">
                                <input type="hidden" name="vegetable_id" value="<?php echo $row['id']; ?>"/>
                                <input type="hidden" name="vote" value="upvote"/>
                                <input type="submit" name="vegetable-like-<?php echo $row['id']; ?>" class="like"
                                       value="Like 👍"/>
                            </form>
                        </div>
                        <div class="likes">Total Likes: <span
                                    class="likes-number"><?php echo $row['number_of_votes']; ?></span>
                        </div>
                        <div class="dislike-wrapper">
                            <form action="index.php" method="post">
                                <input type="hidden" name="vegetable_id" value="<?php echo $row['id']; ?>"/>
                                <input type="hidden" name="vote" value="downvote"/>
                                <input type="submit" name="vegetable-like-<?php echo $row['id']; ?>" class="dislike"
                                       value="Dislike 👎"/>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        } else {
            echo "0 results";
        }
        ?>
    </div>

    </body>
    </html>
<?php
// Close connection
$conn->close();
?>