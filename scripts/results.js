// Display results page on '5' or more footer image clicks
$(".displayResults").click(function(event){
    var currentDisplayCount = 0;
    currentDisplayCount = parseInt($('#displayResultCount').val());

    if (currentDisplayCount >= 5) {
        window.location.href = "results.php";
    } else {
        currentDisplayCount += 1;
        $('#displayResultCount').val(currentDisplayCount);
    }
});