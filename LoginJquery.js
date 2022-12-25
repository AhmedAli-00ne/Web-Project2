$(document).ready(function () {
    $(".SignInText").hide();
    $("#SignIn").hide();
    $("#SignInButton").click(function () {
        $("#SignInButton").addClass("ActiveSign");
        $("#SignUpButton").removeClass("ActiveSign");
    });
    $("#SignUpButton").click(function () {
        $("#SignUpButton").addClass("ActiveSign");
        $("#SignInButton").removeClass("ActiveSign");
    });
    $(".LoginButton").click(function () {
        if($("#SignInButton").hasClass("ActiveSign")){
            $(".SignInText").fadeIn();
            $(".SignUpText").fadeOut();
        }
        else
        {
            $(".SignUpText").fadeIn();
            $(".SignInText").fadeOut();
        }
    });
});