<?php 
    require('dbaccess.php');

    $commentNewCount = $_POST['newCommentCounter'];

    $results = mysqli_query($con, "SELECT * FROM comments LIMIT $commentNewCountgit");

    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_array($results)) {
?>
    <p> <?php echo $row['author']?> <br> <?php echo $row['message']?> </p>

<?php    
        }
    }

    else{
        echo "there are no comments";
    }
?>