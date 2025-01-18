<?php require("script.php"); ?>

<?php

  if (isset($_POST['submit'])) {

    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['community']) || empty($_POST['peopleg']) || empty($_POST['style']) || empty($_POST['model']) || empty($_POST['descriptions']) ){

      $response = "All fields are required.";

    } else {

      $fname = $_POST['firstname'];

      $lname = $_POST['lastname'];

      $from = $_POST['email'];

      $phone = $_POST['phone'];

      $community = $_POST['community'];

      $peopleg = $_POST['peopleg'];

      $style = $_POST['style'];

      $model = $_POST['model'];

      $descriptions = $_POST['descriptions'];





      $to = "msparentijr@gmail.com";
      
      $subject = "Form Submission - Church Planting";

      $subject2 = "Free Online Course!";

      $headers = "From: " . $from;

      $headers2 = "From:" . $to;

      $txt = $fname . " " . $lname . " has submitted a form on the CCD Church Planting website. <br><br>  ******************************************************************** <br>" . "Phone: " . $phone . "<br>" . "Email: " . $from . "<br>" . "Community: " . $community . "<br>" . "People Group: " . $peopleg . "<br>" . "Style: " . $style . "<br>" . "Model: " . $model . "<br>" . "Description: " . $descriptions . "<br>";

      $txt2 = "
      
                  <!DOCTYPE html>
                  <html lang='en'>
                  <head>
                      <meta charset='UTF-8'>
                      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  </head>
                  <body style='font-family: 'Arial'; background-color: black;'>
                      <div id='container' style='background-color: rgb(24, 24, 24); max-width: 1400px; color: white; text-align: center; padding: 10px 0px 100px 0px;'>
                          <div id='top' style=' background-color: #0081b8;'>
                              <h1 style='font-size: clamp(22px, 4vw, 28px); padding: 5px; margin: 0px;'> CCD Church Planting </h1>
                          </div>

                          <!-- <img src='http://msparenti.com/CCDCP/celebration.jpg' style='width: 100%;' alt=''> -->
                          <div style='width: 100%; height: 400px; overflow: hidden;'><img src='http://msparenti.com/CCDCP/celebration.jpg' style='width: 100%; height: 100%; object-fit: cover; ' alt=''></div>

                          <div id='middle'>

                              <h1 style='font-size: clamp(22px, 4vw, 32px); padding: 30px 0px;'>CONGRATULATIONS!</h1>

                              <div id='inner' style='border-top: solid #0081b8 3px; border-bottom: solid #0081b8 3px; width: 80%; margin: auto; padding: 50px 0px;'>
                                  <p>
                                      Thank you for submitting your church plant idea and congratulations on taking the first step in the process of reaching a new community for Jesus!
                                      <br>
                                      <br>
                                      Below is a link that will take you to a series of videos and worksheets for the web-based church planting training. You may work your way through the series at your own pace.
                                      <br>
                                      <br>
                                      Soon, someone will reach out to you to help you get connected to a coach/mentor and our network of church planters.
                                      <br>
                                      <br>
                                      May God bless you on this journey of reaching more people with the good news of Jesus Christ.
                                  </p>

                                  <p style='padding-top: 50px; text-align: left;'>
                                      Joyful Blessings,
                                      <br>
                                      <br>
                                      The District Ministry Strategy Team
                                      <br>
                                      Chicago Central District Church of the Nazarene
                                  </p>                
                              </div>

                          </div>

                          <h2 style='padding: 30px 0px;'>Web-Based Church Planting Training</h2>

                          <a href='msparenti.com/CCDCP/training.html' style='text-decoration: none; background-color: #0081b8; border-radius: 50px; color: white; padding: 20px; font-weight: bold;'>Click Here</a>

                      </div>

                  </body>
                  </html>
      
      ";
      
      
      
        sendMail($to, $subject, $txt, $headers);

        sendMail($from, $subject2, $txt2, $headers2);

        echo "Thank you, " . $fname . "We will contact you shortly. <br> Please check your email for your free access to the CCD Church Planting Web-Training Course.";
      
        // header("Location http://msparenti.com/CCDCP/index.html");
    }
  }
 
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="build.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="form.css">
    <!-- <script src="paralax.js" defer></script> -->
    <script src="nav.js" defer></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>


    <a href="index.php">
        <h1 id="nav_h1">Church Planting</h1>
    </a>
    <nav>
        <img src="CCD_logo_white.png" alt="">

        <h1></h1>

        <img id="menu" src="hamburger-menu.png" alt="">
        <ul id="ul">
            <div class="dropdown">
                <button class="dropbtn">5 Stages</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="http://msparenti.com/CCDCP/imagine.php">Imagine</a>
                    <a href="http://msparenti.com/CCDCP/connect.php">Connect</a>
                    <a href="http://msparenti.com/CCDCP/create.php">Create</a>
                    <a href="http://msparenti.com/CCDCP/build.php">Build</a>
                    <a href="http://msparenti.com/CCDCP/launch.php">Launch</a>
                </div>
            </div>
            <a href="http://msparenti.com/CCDCP/faqs.php">FAQs</a>
            <a href="http://msparenti.com/CCDCP/connect.php">Connect</a>
        </ul>
        <ul id="ul2">
            <span id="close">X</span>
            <a href="http://msparenti.com/CCDCP/index.php">Home</a>
            <div id="stages">
                <label>5 Stages</label>
                <div id="list">
                    <a class="list" href="http://msparenti.com/CCDCP/imagine.php">Imagine</a>
                    <a class="list" href="http://msparenti.com/CCDCP/connect.php">Connect</a>
                    <a class="list" href="http://msparenti.com/CCDCP/create.php">Create</a>
                    <a class="list" href="http://msparenti.com/CCDCP/build.php">Build</a>
                    <a class="list" href="http://msparenti.com/CCDCP/launch.php">Launch</a>
                </div>
            </div>
            <a href="http://msparenti.com/CCDCP/faqs.php">FAQs</a>
            <a href="http://msparenti.com/CCDCP/connect.php">Connect</a>
        </ul>
    </nav>


    <div id="img-container">
        <img id="head-pic" src="images/image (3).png">
    </div>



    <h1 id="title">Build</h1>

    <p id="some-text">
      The fourth stage of the church planting process is to BUILD a launch team. During the creation of the plan, one will learn more about recruiting and training a launch team as well as generate a list of prospective members of the team. Now, a church planter will begin this process.
    </p>



    <section>

        <div id="grid">
            <div id="one">
                <div class="whole">“If the whole body were an eye, where would the sense of hearing be? If the whole body were an ear, where would the sense of smell be?” <br> - Apostle Paul</div>
            </div>
            <div id="two">
                <div id="top">“I found out the hard way that if we don’t disciple people, the culture sure will.” <br> - Alan Hirsch</div>
                <div id="divider-one">
                    <div class="small">“I can do things you cannot, you can do things I cannot; together we can do great things.” <br> - Mother Teresa</div>
                    <div class="small">“If you want to go fast, go alone. If you want to go far, go together.” <br> - African Proverb</div>
                </div>
            </div>
            <div id="three">
                <div id="divider-two">
                    <div class="small"> “A leader is one who knows the way, goes the way, and shows the way.” <br> - John C. Maxwell</div>
                    <div class="small">“No man will make a great leader who wants to do it all himself, or to get all the credit for doing it.” <br> - Andrew Carnegie</div>
                </div>
                <div id="right">“Coming together is a beginning. Keeping together is progress. Working together is success." <br> - Henry Ford</div>
            </div>
            <div id="four">
                <div class="whole">“Don’t just delegate tasks to the next generation. If you delegate tasks, you create followers. Instead, delegate authority to create leaders.” <br> - Craig Groeschel</div>
            </div>
        </div>

    </section>






    




  <section id="form-section">
    <div class="formbold-main-wrapper">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="formbold-form-title">
          <h2 class="">Share Your Idea</h2>
          <p>
            Fill out this form to share your idea and get the process started.
            <br>
            Someone will reach out to you soon to help you begin cultivating what you need to know and answer your
            questions.
          </p>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label">
              First Name
            </label>
            <input required="true" type="text" name="firstname" id="firstname" class="formbold-form-input" />
          </div>
          <div>
            <label for="lastname" class="formbold-form-label"> Last Name </label>
            <input required="true" type="text" name="lastname" id="lastname" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="email" class="formbold-form-label"> Email </label>
            <input required="true" type="email" name="email" id="email" class="formbold-form-input" />
          </div>
          <div>
            <label for="phone" class="formbold-form-label"> Phone Number </label>
            <input required="true" type="text" name="phone" id="phone" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-mb-3">
          <label for="community" class="formbold-form-label">
            Target Community
          </label>
          <input required="true" type="text" name="community" id="community" class="formbold-form-input" />
        </div>

        <div class="formbold-mb-3">
          <label for="peopleg" class="formbold-form-label">
            Target People Group
          </label>
          <input required="true" type="text" name="peopleg" id="peopleg" class="formbold-form-input" />
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="style" class="formbold-form-label"> Style </label>
            <input required="true" type="text" name="style" id="style" class="formbold-form-input"
              placeholder="Coffee, Sports, etc." />
          </div>
          <div>
            <label for="model" class="formbold-form-label"> Model </label>
            <input required="true" type="text" name="model" id="model" class="formbold-form-input"
              placeholder="Traditional, House, etc." />
          </div>
        </div>

        <div class="formbold-input-flex-last">
          <label for="descriptions" class="formbold-form-label"> Description </label>
          <textarea required="true" type="text" name="descriptions" id="descriptions" class="formbold-form-input"
            placeholder=""></textarea>
        </div>

        <div class="formbold-input-flex-submit">
          <button class="formbold-btn" action="submit" name="submit">Submit</button>
        </div>

        <?php
                    if(@$response == "Thank you, " . @$fname . "We will contact you shortly.\n Please check your email for your free access to the CCD Church Planting Web-Training Course."){
                      ?>
        <p>
          Thank you,
          <?php echo @$fname; ?>.
          <br>
          We will contact you shortly.
          <br>
          Please check your email for your free access to the CCD Church Planting Web-Training Course.
        </p>
        <?php
                    } else {
                      ?>
        <p>
          <?php echo @$response; ?>
        </p>
        <?php
                    }
                ?>

    </div>
    </form>
    </div>


  </section>


</body>
</html>
