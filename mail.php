<?php
    // Note: the post values being used are from the js code, because the form was prevented using event.preventDefault();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];

        $errorEmpty = false;
        $errorEmail = false;

        if(empty($name) || empty($email) || empty($message)){
           echo "<span class='form-error'> All Fields Required! </span>";
           $errorEmpty=true;
        }

        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //checks if email is in proper format
            echo "<span class='form-error'> Invalid Email! </span>";
           $errorEmail=true;
        }

        else{
            echo "<span class='form-success'> Message Sent! </span>";
        }
    }

    else{
        echo "Error 404";
    }
?>

<script>
     $("#name, #email, #message").removeClass("input-error");
    
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if(errorEmpty == true){
        $("#name, #email, #message").addClass("input-error");
    }

    if(errorEmail == true){
        $("#email").addClass("input-error");
    }

    if(errorEmpty == false && errorEmail == false){
        $("#name, #email, #message").val("");
    }


</script>