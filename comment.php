<?php require('dbaccess.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Comments</title>
</head>
<body>

    <div id="comments">
        <?php 
            $results = mysqli_query($con, "SELECT * FROM comments LIMIT 2");

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
    </div>

    <button>Show more comments..</button>

    
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            let commentCount = 2;

            $("button").click(function(){
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                    newCommentCounter: commentCount
                }, function(){
                    alert("it works");
                });
            });
        });
    </script>

</body>
</html>