<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Bootstrap Forms</title>

    <!--reducing the width of the form on desktop-->
    <style type="text/css">
      form {
        max-width: 450px;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>Receiving Form Data using GET</h1>

        <?php

        if(isset($_GET['username'])) {
            //the "name" of the form element(Username) from formsend.html is what we access here!
            echo "<p><b>Username: </b>" . $_GET['username'] . "</p>";
        }
        if(isset($_GET['password'])) {
            //the "name" of the form element(Password) from formsend.html is what we access here!
            echo "</p><b>Password: </b>" . $_GET['password'] . "</p>";
        }
        if(isset($_GET['gender'])) {
            echo "</p><b>Gender: </b>" . $_GET['gender'] . "</p>";
        }
        if(isset($_GET['newsletter'])) {
            echo "</p><b>Newsletter: </b>" . $_GET['newsletter'] . "</p>";
        }
        if(isset($_GET['country'])) {
            echo "</p><b>Country: </b>" . $_GET['country'] . "</p>";
        }
        if(isset($_GET['comments'])) {
            echo "</p><b>Comments: </b>" . $_GET['comments'] . "</p>";
        }
        if(isset($_GET['age'])) {
            echo "</p><b>Age: </b>" . $_GET['age'] . "</p>";
        }
        ?>

    </div>
    <!--end of container class-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
