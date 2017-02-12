<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>

      <title>Example CSS Animations and Transitions</title>

      <style type="text/css" media="screen">
        .clear {
          clear: both;
        }

        .circle {
          width: 130px;
          height: 130px;
          border-radius: 50%;
          float: left;
          margin-right: 50px;
        }

        #red-circle {
          background-color: red;
        }

        #blue-circle {
          background-color: blue;
        }

        #yellow-circle {
          background-color: yellow;
        }

        #green-circle {
          background-color: green;
        }

      </style>
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
                <h1 class="postTitle">Example CSS Animations and Transitions</h1>
                <time class="postTime">20 January 2017</time>
              </div>

              <br />
              <hr />
              <br />

              <div class="javascriptEx">
                <h3>Javascript Example</h3>

                <div class="circle" id="red-circle"></div>

                <div class="circle" id="blue-circle"></div>

                <div class="circle" id="yellow-circle"></div>

                <script type="text/javascript">
                /********************************************************************
                 * Main Javascript Example
                 ********************************************************************/

                 document.getElementById('red-circle').onclick = function()
                 {
                   document.getElementById('red-circle').style.display = "none";
                 }

                 document.getElementById('yellow-circle').onclick = function()
                 {
                   document.getElementById('yellow-circle').style.display = "none";
                 }

                 document.getElementById('blue-circle').onclick = function()
                 {
                   document.getElementById('blue-circle').style.display = "none";
                 }

                  </script>
                </div>

                <div class="clear"></div>

                <br />
                <hr />
                <br />

                <div class="jQueryEx">
                  <h3>JQuery Example</h3>

                  <div class="circle" id="green-circle"></div>

                  <script type="text/javascript">
                  /********************************************************************
                   * jQuery Example
                   ********************************************************************/
                   $("#green-circle").click(function()
                   {
                     $(this).animate({width:"400px"}, 2000);
                   });
                  </script>

                </div>

                <div class="clear"></div>

                <br />
                <hr />
                <br />

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

      <footer class="footer footer-style">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
      </footer>
    </body>
  </html>
