<!DOCTYPE html>
  
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
        
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>

      <title>Specific DOM Manipulation</title>
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
                  <h1 class="postTitle">Specific DOM Manipulation</h1>

              </div>
                
              <form action="" id="dom_form">
                <table>
                    <tr>
                        <td><p id="createNode">Parent element 1.</p></td>
                        <td><p id="secondNode">Parent element 2.</p></td>
                    </tr>
                </table>
    
                <form>
            
                    <table>
                        <tr>
                            <td><button onmousedown="createChildElement()">Create Child</button></td>
                            <td><button onmousedown="insertElementBefore()">Insert Before</button></td>
                            <td><button onmousedown="removeChildElement()">Remove Child</button></td>
                            <td><button onmousedown="replaceChildElement()">Replace Child</button></td>
                        </tr>
                    </table>
                </form>
              </form>

            <script>
                function createChildElement() 
                {
                    var newChild = document.createElement("p");
                    var newNode = document.createTextNode("This is the child element of Parent 1");
                    newChild.appendChild(newNode);
		
                    var parentText = document.getElementById("createNode");
                    parentText.appendChild(newChild);
                }
	
                function insertElementBefore() 
                {
                    var newChild = document.createElement("p");
                    var newNode = document.createTextNode("This is the child element of Parent 2");
                    newChild.appendChild(newNode);
		
                    var parentText = document.getElementById("createNode");
                    var childText = document.getElementById("secondNode");
                    parentText.appendChild(childText);
                    parentText.insertBefore(newChild, childText);
                }
	    
                function removeChildElement() 
                {
                    var parentText = document.getElementById("createNode");
                    parentText.appendChild(document.getElementById("secondNode"));
                    parentText.removeChild(document.getElementById("secondNode"));	
                }
	 
                function replaceChildElement() 
                {
                    var newChild = document.createElement("p");
                    var newNode = document.createTextNode("Replaced the text!");
                    newChild.appendChild(newNode);
		
                    var parentText = document.getElementById("createNode");
                    var childText = document.getElementById("secondNode");
                    parentText.appendChild(childText);
                    parentText.replaceChild(newChild, childText);
                }
            </script>
                
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
    </body>
</html>