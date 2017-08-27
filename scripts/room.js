$(document).ready(function(){
    $(".room").click(function() {
        var room = event.target.id.toString();
        switch (room) {
            case 'Two':
                $("#roomId").val("2");
                break;
            case 'Three':
                $("#roomId").val("3");
                break;
            default:
                $("#roomId").val("1");
        }
        $( "#currentRoom" ).text('Voting in Room ' + room );
    });
});