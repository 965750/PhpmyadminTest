<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
</head>
<body>
    <h2>just testin</h2>
    <div id="comments">
        <?php
            $sql = "SELECT * FROM comments LIMIT 2";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                
                while($row = mysqli_fetch_assoc($result)){
                    echo "<p>";
                    echo $row['author'];
                    echo "<br>";
                    echo $row['message'];
                    echo "</p>";
                }
            }else{
                echo "there are no comments!";
            }
        ?>
    </div>
</body>
</html>