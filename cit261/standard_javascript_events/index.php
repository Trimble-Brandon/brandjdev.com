<!DOCTYPE html>
  
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
        
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>

      <title>Example CSS Animations and Transitions</title>
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
                  <h1 class="postTitle">Example of standard JavaScript Events</h1>

              </div>
                
                <div id="content1" class="content">
                  <button id="button1" onclick="createCircle()">Click me for circle!</button>
                  
                </div>
        
                <hr />
                
                <div>
                    <p id="paragraph">
                        Lorem ipsum dolor sit amet, pro no tantas nominavi honestatis, 
                        cibo facilisi partiendo ad pri. Eu molestie pertinax pro, pro 
                        paulo accusata cu. Pro ad prompta meliore. In est etiam praesent, 
                        ius ea hinc possim urbanitas.
                    </p>
                    
                    <button id="p_button">Read More</button>
                    <button id="style_button">Style Message Red</button>
                    
                    <script type="text/javascript">
                        document.getElementById("p_button").onclick = function() {
                            document.getElementById("paragraph").innerHTML = 
                            "Lorem ipsum dolor sit amet, "
                            + "pro no tantas nominavi honestatis, cibo facilisi partiendo ad pri. Eu "
                            + "molestie pertinax pro, pro paulo accusata cu. Pro ad prompta meliore. "
                            + "In est etiam praesent, ius ea hinc possim urbanitas. Ridens quaestio no "
                            + "vim, tollit commodo suscipiantur ea pri, omnes eruditi necessitatibus mel "
                            + "ea. Et vix ceteros moderatius. Adhuc reque suscipiantur mel at. Nibh "
                            + "ludus tibique ea duo, nec detraxit atomorum eloquentiam ex, sit utinam "
                            + "scribentur id. Tempor perpetua eum ut, ne affert scripta molestie est. "
                            + "Cibo magna principes vel ex. Cu fabulas lobortis nominati duo, no "
                            + "vituperata reformidans vim. Populo salutatus vis cu, et error doctus "
                            + "cotidieque qui. Vel tota pertinax convenire an. Ad elit aliquid sed, "
                            + "illum voluptatum cum cu. Simul doming apeirian eu vel, stet case "
                            + "patrioque in vix, pri duis nominavi legendos ex. No sit graece essent "
                            + "maluisset. Pro ad denique delicata, atomorum consequuntur est ut. Ex eos "
                            + "quem atqui causae. Vel congue civibus reprehendunt te, ad quaeque "
                            + "antiopam mediocrem eos. Debet corrumpit deseruisse has no. Dissentiet "
                            + "philosophia et usu, iriure accumsan copiosae has id. Causae regione "
                            + "adipisci ne eam. Et has primis facilisis repudiare, pri ad detracto "
                            + "deleniti ponderum, novum oratio pertinax et quo. Cu eam omnis diceret "
                            + "lobortis. Id cum maiorum epicuri moderatius. Eam prompta accusata ea. "
                            + "Id omnis interesset qui, persius legimus quaestio mea te, has mutat "
                            + "liber ad.";
                        }
                        
                        document.getElementById("style_button").onclick = function() {
                            document.getElementById("paragraph").style.color = "#990000";
                        }
                
                    </script>
                    
                </div>
                
            </article>
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
      <br />

      <footer class="footer footer-style">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
      </footer>
        
      <script src="js/javascript.js"></script>
    </body>
</html>
  


