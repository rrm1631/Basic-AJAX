<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Contact</title>
</head>
<body>

<div class="container">
    <form action="" method="post" class="">
        <div class="mt-5">

            <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email">

            <select name="gender" id="gender" class="form-select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>

            <button type="submit" name="submit" id="submit" class="btn btn-primary  col-6">Submit</button>

            <p id="form-message"></p>
        </div>
    </form>
</div>
    






 <!-- JQUERY -->
 <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<script>
    $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault(); //prevents action and submit inside form
            let name = $("#name").val();
            let email = $("#email").val();
            let gender = $("#gender").val();
            let message = $("#message").val();
            let submit = $("#submit").val();


            $("#form-message").load("mail.php", {
                //parameter = postname: value
                name: name,
                email: email,
                gender: gender,
                message: message,
                submit: submit
            });
        });
    });

</script>

</body>
</html>