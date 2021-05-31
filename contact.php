<?php $title = 'Contact';?>
<!DOCTYPE html>
<html>
  <head>
  <?php include './components/head.php'; ?>
  </head>
  <body>
  <?php include'./components/nav-menu.php';?>
    <h1>Contact</h1>

    <form action="https://formspree.io/f/mvoveepo" method="POST">
     <div class="container" id="contact-form">
       <div class="row">
        <div class="col-sm-6">
          <p id="title">First Name:</p>
          <input type="text" name="firstName" />

          <p id="title">Last Name:</p>
          <input type="text" name="lastName" />

          <p id="title">Email:</p>
          <input type="email" name="email" placeholder="123@example.com"/>
        </div>
        <div class="col-sm-6">
        <p id='title'>Message:</p>
        <textarea name="message" rows="10" cols="30"></textarea>

        <p id="title">Gender:</p>
        <input type="radio" name="queryType" value="male" /> Male
        <input type="radio" name="queryType" value="female" /> Female
        <input type="radio" name="queryType" value="other" /> Other
        <br>
        <p id="title">Interests:</p>
        <input type="checkbox" name="interests" value="painting" /> Painting<br/>
        <input type="checkbox" name="interests" value="Drawing" /> Drawing<br/>
        <input type="checkbox" name="interests" value="Sculpting" /> Sculpting<br/>
        <br/><br/>
        <button type="submit">Submit</button>
        </div>
      </div>
    </form>
    <br />
    <div class="footer">
    <?php include './components/footer.php';?>
    </div>
  </body>
</html>