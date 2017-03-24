<?php
  // Example function
  function simple_example()
  {
    $num1 = 7;
    $num2 = 3;
    $sum = $num1 + $num2;

    $message = "$num1 + $num2 = $sum";
    echo $message;

    return $message;
  }
 ?>
<!DOCTYPE html>
<!--
    BrandScribe CIT336 Backend Development Teaching Presentation Page
    Created on : March 20, 2017, 10:44:45 AM
    Author     : Brandon J Trimble
 -->
<html lang="en-us">
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>

	  <title>CIT 336 Teaching Presentation | BrandScribe</title>
  </head>

  <body>
    <header id="page_header">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
    </header>

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
              <h1 class="postTitle">CIT 336 Teaching Presentation</h1>
            </div>

            <section>
              <h2>PHP functions: naming rules, syntax, return</h2>

              <p class="intro postContent">
                <strong>Naming rules: </strong>When naming a function it is best
                practice to begin with a letter or an underscore. The rest of the
                name then can contain letters, numbers and underscores.
              </p>

              <img src="images/naming_code.PNG" />

              <p class="postContent">
                <strong>Syntax: </strong>You declare a function with the keyword:
                function. That's easy enough to remember! You then name the
                function followed by parentheses. You enclose the code in brackets.
              </p>

              <img src="images/functionSyntax.PNG" />

              <p class="postContent">
                <strong>Return: </strong>A return statement allows you to return
                data from the function. The return statement is used to end the
                function and returns the variable containing data. If you don't
                specify with a return statement, the function will return NULL.
              </p>

              <h3>Example Function</h3>

              <p class="postContent">
                I created a simple example php function that looks like:
              </p>

              <img src="images/exampleFunction.PNG" />

              <p class="postContent">
                This code can be called here:<br />
                <?php simple_example(); ?> <br />
                <br />
                The above line in code looks like:
              </p>

              <img src="images/functionCall.PNG" />

              <hr />

              <h3>Video Presentation</h3>

              <object id="scPlayer"  width="700" height="500" type="application/x-shockwave-flash" data="https://content.screencast.com/users/Brandscribe/folders/Jing/media/3bb747c8-ae51-4ac9-916d-273e2e76edd9/jingswfplayer.swf" >
                <param name="movie" value="https://content.screencast.com/users/Brandscribe/folders/Jing/media/3bb747c8-ae51-4ac9-916d-273e2e76edd9/jingswfplayer.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#FFFFFF" />
                <param name="flashVars" value="thumb=https://content.screencast.com/users/Brandscribe/folders/Jing/media/3bb747c8-ae51-4ac9-916d-273e2e76edd9/FirstFrame.jpg&containerwidth=1914&containerheight=1006&content=https://content.screencast.com/users/Brandscribe/folders/Jing/media/3bb747c8-ae51-4ac9-916d-273e2e76edd9/2017-03-23_2158.swf&blurover=false" />
                <param name="allowFullScreen" value="true" />
                <param name="scale" value="showall" />
                <param name="allowScriptAccess" value="always" />
                <param name="base" value="https://content.screencast.com/users/Brandscribe/folders/Jing/media/3bb747c8-ae51-4ac9-916d-273e2e76edd9/" />
                Unable to display content. Adobe Flash is required.
              </object>

              <br />

              <a href="https://www.screencast.com/t/JWaYs1xqt" target="_blank">Screencast Link</a>

            </section>
          </article>
        </div>

        <div class="col-sm-1">

        </div>
      </div>
    </div>

    <br />
    <br />

    <footer class="footer footer-style">
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
  </body>
</html>
