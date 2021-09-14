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
    <title>PHP Madlib</title>

    <!--reducing the width of the form on desktop-->
    <style type="text/css">
      form {
        max-width: 450px;
      }
      .storycontainer {
        //max-width: 450px;
        background-color: lightgray;
        border: solid 5px blue;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Madlib</h1>
      <form name="myform" method="post" action="madlib.php">
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input
            type="text"
            class="form-control"
            name="firstname"
            placeholder="Enter firstname here"
          />
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input
            type="text"
            class="form-control"
            name="lastname"
            placeholder="Enter lastname here"
          />
        </div>
        
        <div class="form-group">
          <label for="gender">Gender</label>
          <!--<div class="form-check">
            <input class="form-check-input" type="radio" name="gender" />
            <label class="form-check-label" for="gender"> Male </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" />
            <label class="form-check-label" for="gender"> Female </label>
          </div>-->
          Male:
          <input
            type="radio"
            class="custom-control-label"
            name="gender"
            value="guy"
            checked
          /> <!--"value" attribute will be shown in the browser-->
          Female:
          <input
            type="radio"
            class="custom-control-label"
            name="gender"
            value="girl"
          />
        </div>

        <div class="form-group">
          <label for="work">Work</label>
          <input
            type="text"
            class="form-control"
            name="work"
            placeholder="What is your work?"
          />
        </div>

        <div class="form-group">
          <label for="place">Place</label>
          <select class="form-control" name="place">
            <!--<option value="">Select color...</option>-->
            <!--this serve as the placeholder-->
            <option>school</option>
            <option>park</option>
            <option>mall</option>
          </select>
        </div>

        <div class="form-group">
          <label for="day">Today is:</label>
          <select class="form-control" name="day">
            <!--<option value="">Select color...</option>-->
            <!--this serve as the placeholder-->
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option >Thursday</option>
            <option >Saturday</option>
            <option >Sunday</option>
          </select>
        </div>
    
        <div class="form-group">
          <label for="color">Favorite Color</label>
          <select class="form-control" name="color">
            <option value="">Select color...</option>
            <!--this serve as the placeholder-->
            <option>blue</option>
            <option>red</option>
            <option>aquamarine</option>
            <option >teal</option>
            <option >yellow</option>
            <option >pink</option>
          </select>
        </div>
        <div class="form-group">
          <label for="garment">Garment</label>
          <select class="form-control" name="garment">
            <option value="">Select garment...</option>
            <!--this serve as the placeholder-->
            <option>thong monokini</option>
            <option>comfortable but ragged hipster sweater</option>
            <option>gap sprint catalog vest</option>
            <option >pair of Value Village special plaid pants</option>
            <option >pair of hand-me-down overalls</option>
            <option >pair of fisherman's wader</option>
          </select>
        </div>

        <button type="submit" name="mysubmit" class="btn btn-primary mb-2">
          Submit
        </button>
      </form>

      <?php
      // Step 1 in any app... grab the user data from the form elements, set variables, and TEST them.
      $firstName = $_POST['firstname'];
      $lastName = $_POST['lastname'];
      $gender = $_POST['gender'];
      $work = $_POST['work'];
      $place = $_POST['place'];
      $day = $_POST['day'];
      $color = $_POST['color'];
      $garment = $_POST['garment'];

      //echo "$firstName, $lastName, $gender, $color, $garment";
      
      if ($gender == "guy"){ // "guy" is the "value" attribute in HTML
        $preference = "girl";
      } else {
        $preference = "guy";
      }

      if ($gender == "guy") {
        $pronoun = "he";

      } else {
        $pronoun = "she";
      }

      // Lets create a condition where we only process this IF the user has tick the submit button
      if(isset($_POST['mysubmit'])) {
          //echo "SUBMITTED"; //just for testing
        // END of if submit

        echo "<div class=\"storycontainer\">";

          $story = "<br><br>\n<p>There was a $gender named $firstName $lastName. One $day morning, $firstName was in $place and about wearing a $color $garment.</p>";

          $story .= "<p>Then, $firstName saw a cute $preference walking by. \"Hey cutie! May I get your contact number?\", said $firstName. </p>";

          $story .= "<p>The $preference give the number to $firstName. After that, they start talking comfortably. The $preference said that $color is the lucky color of the day. $firstName laughs so hard and the conversation continues. </p>";

          $story .= "<p>That night, $firstName texted the $preference and decided to meet again. Both agreed to meet at $place to get to know more each other. </p>";

          $story .= "<p>The $preference ask $firstName what $pronoun does for a living. $firstName said that $pronoun is a $work. The $preference said that being a $work is a good profession.</p>";
          
          $story .= "<p>To make the long story short, this $preference and $firstName ended up with each other and there love continues to grow.</p><br><br>";

          echo $story;

        echo "</div>";
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
