$(document).ready(function(){
    $("#btn").click(function(){
        // .load("url/file", {data for POST/GET}) - parameters
        $("#test").load("data.txt", {Name: "Raphael", Lastname: "Mallari"});
    });
});
