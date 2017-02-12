<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>

      <title>CIT 261 Production</title>

      <script type="text/javascript">
        /***********************************************
         * Code for the javascript example
         ***********************************************/
         var hotel = {
          name: 'Quay',
          rooms: 40,
          booked: 25,
          checkAvailability: function() {
            return this.rooms - this.booked;
          }
         };

         function showObjectName() {
          var hotelName = hotel.name;
          var message = "Hotel Name is: " + hotelName + ".";

          document.getElementById('outputObjectName').innerHTML = message;
         }

         function showObjectRooms() {
          var hotelRooms = hotel.rooms;
          var message = "Hotel room amount is: " + hotelRooms + ".";

          document.getElementById('outputObjectRooms').innerHTML = message;
         }

         function showObjectBookedRooms() {
          var hotelBookedRooms = hotel.booked;
          var message = "Hotel booked room amount is: " + hotelBookedRooms + ".";

          document.getElementById('outputObjectBookedRooms').innerHTML = message;
         }

         function showObjectAvailability() {
          var message = "Hotel room availability is: " + hotel.checkAvailability() + ".";

          document.getElementById('outputObjectAvailability').innerHTML = message;
         }

      </script>
    </head>

    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
    </header>

    <body>
      <div class="top-div">
        <br />
        <br />
        <br />
        <br />
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-1">

          </div>

          <div class="col-sm-10">
            <article>
              <div class="postHeading">
                <h1 class="postTitle">Javascript Object Examples</h1>
              </div>

              <br />
              <hr />

              <section>
                <p>
                  Test the Hotel Object!
                </p>

                Click for name of hotel stored in object: <button type="button" onclick="showObjectName()">Click Me!</button>

                <div id="outputObjectName"></div>
                <br />

                Click for rooms of hotel stored in object: <button type="button" onclick="showObjectRooms()">Click Me!</button>
                <div id="outputObjectRooms"></div>
                <br />

                Click for booked rooms of hotel stored in object: <button type="button" onclick="showObjectBookedRooms()">Click Me!</button>
                <div id="outputObjectBookedRooms"></div>
                <br />

                Click for availability of hotel stored in object: <button type="button" onclick="showObjectAvailability()">Click Me!</button>
                <div id="outputObjectAvailability"></div>
                <br />
              </section>
            </div>

            <div class="col-sm-1">

            </div>
          </div>
      </div>

      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />

      <footer class="footer footer-style">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
      </footer>
    </body>
  </html>
