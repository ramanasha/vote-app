$(document).ready(function(){
    $(".face").click(function() {
        var vote = event.target.id;
        var roomId= $("#roomId").val();

        if ($('.info').is(':visible')) {
            $(".info").html("Please Wait!");
            $(".info").show();
            $(".info").delay(1700).fadeOut(500);
        } else {
            $('#' + vote).animate({
                opacity: '0.5'
            });
            $('#' + vote).animate({
                opacity: '1'
            });

            $.ajax({
                type: "POST",
                url: "insert-vote.php",
                data: "vote=" + vote+ "&roomId=" + roomId,
                success: function(data) {
                    $(".info").html("Thank you for your vote!");
                    $(".info").show();
                    $(".info").delay(1700).fadeOut(500);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $(".info").html("Error: " + errorThrown);
                    $(".info").show();
                    $(".info").delay(1700).fadeOut(500);
                }
            });
        }
    });
});