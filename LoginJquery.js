$(document).ready(function () {
    $(".SignInText").hide();
    $("form[name='form2']").hide();
    $("#SignInButton").click(function () {
        $("#SignInButton").addClass("ActiveSign");
        $("#SignUpButton").removeClass("ActiveSign");
        $("form[name='form2']").show();
        $("form[name='form1']").hide();
    });
    $("#SignUpButton").click(function () {
        $("#SignUpButton").addClass("ActiveSign");
        $("#SignInButton").removeClass("ActiveSign");
        $("form[name='form2']").hide();
        $("form[name='form1']").show();
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