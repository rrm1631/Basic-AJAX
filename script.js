$(document).ready(function(){
    $("#btn").click(function(){
        // .load("url/file", {data for POST/GET}, callback) - parameters
        $("#test").load("data.txt", {
            Name: "Raphael", 
            Lastname: "Mallari"
        }, function(){ //callback function
            alert("Hi There!");
        });
    });
});
