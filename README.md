# vote-app

vote-app is a simple web application used to capture attendee feedback during an event. 

During an event, organisers ask attendees to click on the smiley face to show how they felt about the session which they just attended.

![alt text](https://github.com/vivrichards600/vote-app/blob/master/images/main-screen.png "App Screenshot")

Event organisers can quickly set which room they are in, enabling multiple orgnisers to capture votes for events which have multiple rooms running at the same time.

The web application has a very basic result page which shows the number of votes each day. Eventually this page will display a breakdown of the number of each smiley face vote for each room for each date.

## Quick setup

Mysql
1. Create a mysql database where ever you wish to host your website
2. Copy the contents of database.sql and run the contents of the script in your newly created database.

PHP
1. Open db.php in notepad and edit the following lines - remember to save your changes!

``` php
// input your mysql credentials into db.php replacing the following:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote_db";
```
2. Navigate to the  '/Images/' folder and replace 'logo.png' with your own logo
3. Upload all of the files from this repository to where you are hosting your website
4. Test everything works!

If you would like to try this web application out, 000webhost.com offer free basic Mysql and PHP hosting.

## Need to change something?

### Add / Remove rooms

If you wish to add/remove additional rooms, there are two files which you will need to change:
1. 'footer.php'
If you add a new room, class="room" is required for any new element you add. The ID which you set for your new element (if you add one) will be used in 'room.js'
2. '/scripts/room.js'
If you add any new rooms you will need to add the ID value to the switch statement.

### Display results

If you want to change how many clicks it takes until the results page is shown to the event organiser, you will need to change:
1. '/scripts/results.js'
Edit line 6 to the value you reuquire. It is currently set to 5 so it will take 5 clicks on the footer logo before the results page is displayed to the event organiser.

