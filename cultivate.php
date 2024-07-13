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
    <title>Cultivate</title>
    <link rel="stylesheet" href="cultivate.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="form.css">
    <script src="nav.js" defer></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
<body>


    <a href="index.php"><h1 id="nav_h1">Church Planting</h1></a>
    <nav>
        <img src="CCD_logo_white.png" alt="">

        <h1></h1>

        <img id="menu" src="hamburger-menu.png" alt="">
        <ul id="ul">
            <div class="dropdown">
                <button class="dropbtn">5 Stages</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="http://msparenti.com/CCDCP/imagine.php">Imagine</a>
                  <a href="http://msparenti.com/CCDCP/cultivate.php">Cultivate</a>
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
                    <a class="list" href="http://msparenti.com/CCDCP/cultivate.php">Cultivate</a>
                    <a class="list" href="http://msparenti.com/CCDCP/create.php">Create</a>
                    <a class="list" href="http://msparenti.com/CCDCP/build.php">Build</a>
                    <a class="list" href="http://msparenti.com/CCDCP/launch.php">Launch</a>
                </div>
            </div>
            <a href="http://msparenti.com/CCDCP/faqs.php">FAQs</a>
            <a href="http://msparenti.com/CCDCP/connect.php">Connect</a>
        </ul>
    </nav>


    <video src="videos/TBD.mp4" autoplay loop muted></video>


    <section>
        <div id="step-one">
            <div class="left">
                <img src="images/Mentor pic.jpg" alt="">
            </div>
            <div class="right">
                <h1>Connect with a Coach/Mentor</h1>
                <ul>
                    <li>Once someone completes the form to share their idea for a church plant, the cultivating process begins.</li>
                    <li>A representative from the District Ministry Strategy Team (DMST) will contact you and connect you with a coach/mentor.</li>
                    <li>The coach will be an experienced church planter who will help through the cultivating, creating, building, and launching process.</li>
                </ul>
            </div>
        </div>

        <div id="step-two">
            <div class="left">
                <h1>Join a Network of Church Planters</h1>
                <ul>
                    <li>The DMST has organized a network of church planters who meet together online</li>
                    <li>The gatherings are for sharing experiences, encouraging one another, discussing strategies, and celebrating victories</li>
                </ul>
            </div>
            <div class="right">
                <img src="images/Network pic.jpg" alt="">
            </div>
        </div>

        <div id="step-three">
            <div class="left">
                <img src="images/Web Training pic.jpg" alt="">
            </div>
            <div class="right">
                <h1>Navigate through a Web-based Training</h1>
                <ul>
                    <li>As soon as someone submits their idea, they receive an email with access to online training resources.</li>
                    <li>The training is comprised of videos recorded by church planters about church planting, building teams, and launching.</li>
                    <li>Each video includes a downloadable worksheet to process and develop the thoughts shared in each video.</li>
                </ul>
            </div>
        </div>
        
        <div id="step-four">
            <div class="left">
                <h1>Attend Church Planting Conferences / Workshops</h1>
                <ul>
                    <li>Everyone in the Cultivating process will receive updates about available conferences being held throughout the country.</li>
                    <li>These are great opportunities to not only gain more information but also meet other church planters in person.</li>
                    <li>Those in the process will also receive information about further training opportunities that may help in the development of a plan.</li>
                </ul>
            </div>
            <div class="right">
                <img src="images/Conference pic.jpg" alt="">
            </div>
        </div>
        
        <div id="step-five">
            <div class="left">
                <img src="images/Assessment pic.jpg" alt="">
            </div>
            <div class="right">
                <h1>Participate in “Discovery Weekend” Skills Assessment</h1>
                <ul>
                    <li>An annual event is held in the Chicagoland area for those who sense a call to pastor or plant a church.</li>
                    <li>This weekend retreat will help planters understand themselves better by identifying their personalities, strengths, weaknesses, and gifts.</li>
                    <li>It is also an encouraging time to meet others who are early in the process of cultivating their call to reach others for Jesus.</li>
                </ul>
            </div>
        </div>
        
        <div id="step-six">
            <div class="left">
                <h1>Visit another Church Plant for a Hands-on Experience</h1>
                <ul>
                    <li>Every year, new churches are being planted.</li>
                    <li>Each church is unique in its location, style, model, and culture.</li>
                    <li>The coach/mentor will connect the candidate with a church to visit that may share similar attributes.</li>
                </ul>
            </div>
            <div class="right">
                <img src="images/Visiting pic.jpg" alt="">
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
                    Someone will reach out to you soon to help you begin cultivating what you need to know and answer your questions.
                  </p>
                </div>
          
                <div class="formbold-input-flex">
                  <div>
                    <label for="firstname" class="formbold-form-label">
                      First Name
                    </label>
                    <input
                      required="true"
                      type="text"
                      name="firstname"
                      id="firstname"
                      class="formbold-form-input"
                    />
                  </div>
                  <div>
                    <label for="lastname" class="formbold-form-label"> Last Name </label>
                    <input
                      required="true"
                      type="text"
                      name="lastname"
                      id="lastname"
                      class="formbold-form-input"
                    />
                  </div>
                </div>
          
                <div class="formbold-input-flex">
                  <div>
                    <label for="email" class="formbold-form-label"> Email </label>
                    <input
                      required="true"
                      type="email"
                      name="email"
                      id="email"
                      class="formbold-form-input"
                    />
                  </div>
                  <div>
                    <label for="phone" class="formbold-form-label"> Phone Number </label>
                    <input
                      required="true"
                      type="text"
                      name="phone"
                      id="phone"
                      class="formbold-form-input"
                    />
                  </div>
                </div>
          
                <div class="formbold-mb-3">
                  <label for="community" class="formbold-form-label">
                    Target Community
                  </label>
                  <input
                    required="true"
                    type="text"
                    name="community"
                    id="community"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-mb-3">
                  <label for="peopleg" class="formbold-form-label">
                    Target People Group
                  </label>
                  <input
                    required="true"
                    type="text"
                    name="peopleg"
                    id="peopleg"
                    class="formbold-form-input"
                  />
                </div>
          
                <div class="formbold-input-flex">
                  <div>
                    <label for="style" class="formbold-form-label"> Style </label>
                    <input
                      required="true"
                      type="text"
                      name="style"
                      id="style"
                      class="formbold-form-input"
                      placeholder="Coffee, Sports, etc."
                    />
                  </div>
                  <div>
                    <label for="model" class="formbold-form-label"> Model </label>
                    <input
                      required="true"
                      type="text"
                      name="model"
                      id="model"
                      class="formbold-form-input"
                      placeholder="Traditional, House, etc."
                    />
                  </div>
                </div>

                <div class="formbold-input-flex-last">
                        <label for="descriptions" class="formbold-form-label"> Description </label>
                        <textarea 
                          required="true"
                          type="text"
                          name="descriptions"
                          id="descriptions"
                          class="formbold-form-input"
                          placeholder=""
                        ></textarea>
                </div>

                <div class="formbold-input-flex-submit">
                    <button class="formbold-btn" action="submit" name="submit">Submit</button>
                </div>

                <?php
                    if(@$response == "Thank you, " . @$fname . "We will contact you shortly.\n Please check your email for your free access to the CCD Church Planting Web-Training Course."){
                      ?><p>
                        Thank you, <?php echo @$fname; ?>.
                        <br>
                        We will contact you shortly.
                        <br>
                        Please check your email for your free access to the CCD Church Planting Web-Training Course.
                      </p><?php
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