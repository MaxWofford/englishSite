$(function() {
        $(".submit-btn").click(function() {
        var x=$(".mail-input").val();
        var atpos=x.indexOf("@");
        var dotpos=x.lastIndexOf(".");
        var email = $(".mail-input").val();
        var dataString = 'email='+ email;

        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
        {
        $(".mail-input").css({"background-color":"rgba(216, 70, 55, 0.64)"});
        }
        else
        {
        $.ajax({
        type: "POST",
        url: "mail.php",
        data: dataString,
            success: function(){
                window.location.href = "http://englishessaytutor.com";
            }
        });
        }
        return false;
        });