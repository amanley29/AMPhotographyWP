<?php $title = 'Home';?>
<!DOCTYPE html>
<html>
  <head>
  <?php include './components/head.php'; ?>
  </head>
  <body>
  <div class="container">
  <?php include './components/nav-menu.php';?>
    <h1>AM Photography</h1>
      <div class="row">
        <div class="col-sm-6">
          <h2 id="home">
            AM Photography is a safe place where an amateur photographer can
            showcase their work.
          </h2>
          <h3 id="quote">
            "An artist is someone who produces things that people don't need to
            have." - Andy Warhol
          </h3>
        </div>
        <div class="col-sm-6">
          <img
            src="assets/images/records.jpg"
            style="height: 400px; width: 400px"
          />
        </div>
      </div>
    </div>
    <div class="footer">
    <?php include './components/footer.php';?>
    </div>
  </body>
</html>
