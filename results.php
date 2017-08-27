<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Feedback click counter" />
    <meta name="author" content="github.com/vivrichards600">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/results.css">
    <title>Event Feedback</title>

</head>

<body>

    <div class="speech-bubble">
        <h1>Results</h1>
    </div>

    <div class="container">
        <div class="row center">

            <div class="graph-container">
                <?php include 'get-total-votes.php';?>
            </div>

        </div>
        <div class="row center result-details">
            <div id="resultsDetails"></div>
        </div>
    </div>

    <div class="footer center">
        <a href="index.php"><img src="images/logo.png"/></a>
    </div>

</body>