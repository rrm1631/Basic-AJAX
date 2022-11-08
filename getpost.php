<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX GET POST</title>
</head>
<body>

    <button>Get Data</button>
    <p id="test"></p>
   
    
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

            //GET METHOD
            $("button").click(function(){
                $.get("test.txt", function(data, status){ //get data from test.txt
                    $("#test").html(data);
                    //alert(status); //checks if success or failed
                });
            });


            //POST METHOD
            
        });
    </script>
</body>
</html>