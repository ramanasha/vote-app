    <footer>
        <div class="row footer">
            <div class="col-12 center">
                <img src="images/logo.png" class="displayResults"/>
                <br><br>
                <div class="roomSelection">
                    <span class="room" id="One">Room One</span ><span class="room" id="Two">Room Two</span><span class="room" id="Three">Room Three</span>
                    <br>
                    <div class="caption" id="currentRoom">Voting in Room One</div>
                </div>
            </div>
        </div>
    </footer>

    <input type="hidden" id="vote" value=""/>
    <input type="hidden" id="roomId" value="3"/>
    <input type="hidden" id="displayResultCount" value="0"/>

    <script src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/vote.js"></script>
    <script type="text/javascript" src="scripts/room.js"></script>
    <script type="text/javascript" src="scripts/results.js"></script>
</body>
</html>