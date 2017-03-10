<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>

      <title>CIT 261 Production</title>
      
      <script type="text/javascript">
        function createObject() {
            // Store the data from the user
            infoObj = { 
                        "name":document.getElementById('name_input').value, 
                        "age":document.getElementById('age_input').value, 
                        "city":document.getElementById('city_input').value
                    };
            myJSON = JSON.stringify(infoObj);
            localStorage.setItem("testJSON", myJSON);
                    
            // Get the data and output to the user
            text = localStorage.getItem("testJSON");
            obj = JSON.parse(text);
            document.getElementById("name_output").innerHTML = obj.name;
            document.getElementById("age_output").innerHTML = obj.age;
            document.getElementById("city_output").innerHTML = obj.city;
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
                <h1 class="postTitle">JSON Test</h1>
              </div>

              <br />
              <hr />

              <section>
                  Enter a name: <input type="text" id="name_input"><br />
                  Enter an age: <input type="text" id="age_input"><br />
                  Enter a city: <input type="text" id="city_input"><br />
                  <button type="button" onclick="createObject()">Create Object</button>
                  
                  <br />
                  <hr />
                  <p>
                      Name stored is: <span id="name_output"></span><br />
                      Age stored is: <span id="age_output"></span><br />
                      City stored is: <span id="city_output"></span>
                  </p>
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
