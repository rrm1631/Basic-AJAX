<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX GET POST</title>
</head>
<body>

    <button id="btnGet">Get Data</button>
    <input type="text" name="name" id="name" placeholder="Input Name">
    <p id="test"></p>
    
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

            //GET METHOD
            $("#btnGet").click(function(){
                $.get("test.txt", function(data, status){ //get data from test.txt and status
                    $("#test").html(data);
                    //alert(status); //checks if success or failed
                });
            });



            //POST METHOD
            $("#name").keyup(function(){//keyup runs the function everytime you type
                let name = $("#name").val();
                $.post("suggestions.php", {
                    suggestion: name //will be used for isset $_POST[]
                }, function(data, status){  //get data from suggestions.php and status
                    $("#test").html(data);
                });
            });

        });
    </script>
</body>
</html>