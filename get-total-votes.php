<?php
// Get DB info ready for insert
require 'db.php';
if ($result = mysqli_query($conn, "Select count(*) as Total, creation_time from votes group by day(creation_time) order by creation_time desc")) {
?>

    <table class="result-table">
        <thead>
        <tr>
            <td>Date/Time</td>
            <td>Total Votes</td>
        </tr>
        </thead>
        <tbody>
        <?php
        //loop through the returned data
        while ($row = mysqli_fetch_array($result)) {

            $datetime = explode(" ",$row['creation_time']);

            echo '<tr>';
            echo '<td>' . $row["creation_time"] . '</td>';
            echo '<td>' . $row["Total"] . '</td>';
            echo '</tr>';
        }
    ?>
        </tbody>
    </table>
<?php
    //free memory associated with result
    $result->close();

    // Close connection
    mysqli_close($conn);
}
?>

