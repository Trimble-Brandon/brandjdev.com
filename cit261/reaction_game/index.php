<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>

      <title>CIT 261 Production</title>
      
      <style type="text/css">
        
            #shape {
                
                width: 200px;
                height: 200px;
                background-color: red;
                display: none;
                position: relative;
                
            }
            
            .bold {
                
                font-weight: bold;
                
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
                <h1 class="postTitle">Reaction Game</h1>
              </div>

              <br />
              <hr />

              <section>
                <h1>Test Your Reactions!</h1>
        
                <p>Click on the boxes and circles as quickly as you can!</p>
        
                <p class="bold">Your time: <span id="timeTaken"></span></p>
        
                <div id="shape"></div>
        
                <script type="text/javascript">
            
                    var start = new Date().getTime();
            
                    function getRandomColor() {
                
                        var letters = '0123456789ABCDEF'.split('');
    
                        var color = '#';
    
                        for (var i = 0; i < 6; i++ ) {
        
                            color += letters[Math.floor(Math.random() * 16)];
    
                        }
    
                        return color;

                    }
            
                    function makeShapeAppear() {
                
                        var top = Math.random() * 400;
                
                        var left = Math.random() * 400;
                
                        var width = (Math.random() * 200) + 100;
                
                        if (Math.random() > 0.5) {
                    
                            document.getElementById("shape").style.borderRadius = "50%";
                    
                        } else {
                    
                            document.getElementById("shape").style.borderRadius = "0";
                    
                        }
                
                        document.getElementById("shape").style.backgroundColor = getRandomColor();
                
                        document.getElementById("shape").style.width = width + "px";
                
                        document.getElementById("shape").style.height = width + "px";
                
                        document.getElementById("shape").style.top = top + "px";
                
                        document.getElementById("shape").style.left = left + "px";
    
                        document.getElementById("shape").style.display = "block";
                
                        start = new Date().getTime();

                    }
            
                    function appearAfterDelay() {
                
                        setTimeout(makeShapeAppear, Math.random() * 2000);
                
                    }
            
                    appearAfterDelay();
            
                    document.getElementById("shape").onclick = function() {
                
                        document.getElementById("shape").style.display = "none";
                
                        var end = new Date().getTime();
                
                        var timeTaken = (end - start) / 1000;
                
                        document.getElementById("timeTaken").innerHTML = timeTaken + "s";
                
                        appearAfterDelay();
                
                    }
            
                </script>
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

