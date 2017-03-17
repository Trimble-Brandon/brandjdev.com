<!DOCTYPE html>
<!-- BrandScribe Contact Page -->
<html lang="en-us">
  <head>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
		<title>Contact | BrandScribe</title>
	</head>

	<body>
    <header>
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
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">

          <h2>Contact Us</h2>

          <br />

          <form action="" method="get">

            <label for="username">Username:</label>
            <input type="text" name="username" size="25" maxlength="72" required="required" /><br />
            <label for="email">Email:</label>
            <input type="email" name="email" size="30" maxlength="75" required="required" /><br />
            <br />
            <textarea name="comments" cols="50" rows="8">Enter comments...</textarea><br />
            <button>Submit!</button>
          </form>
        </div>

        <div class="col-sm-2">

        </div>
      </div>
		</div>

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
