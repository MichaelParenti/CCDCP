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
    <title>Launch</title>
    <link rel="stylesheet" href="launch.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="form.css">
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


    <div id="img-container">
        <img id="head-pic" src="launch-imgs/Launch Cover.png">
    </div>



    <h1 id="styles-title">Launch</h1>
    <h5 id="styles">
        <p>
            Now for the exciting part! The call of God is to go into a community to love neighbors and share the good
            news. The imagine, connect, create, and build stages were all in preparation for launching a new ministry
            in a community. There are so many ways to connect with your neighbors.
        </p>
    </h5>


    <section>
        <div class="card" style="background-image: url('launch-imgs/You\'re\ Invited\ pic.jpg');">
            <div id="description">
                <h1>Invite Cards</h1>
                <h3>Personally invite people to the launch of the new church.</h3>
                <div id="hr"></div>
                <p>Your launch team can hand invite cards to those they meet in the community or hang them on community
                    bulletin boards or windows of local businesses. They can be used as direct mail pieces as well.
                </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/Outreach\ Events\ pic.jpg');">
            <div id="description">
                <h1>Outreach Events</h1>
                <h3>Plan events to connect with the community.</h3>
                <div id="hr"></div>
                <p>Your launch team can plan events like picnics, festivals, sports camps, outdoor movie nights, etc. to
                    connect with specific social groups in your community. </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/Social\ Media\ pic.jpg');">
            <div id="description">
                <h1>Social Media</h1>
                <h3>Spread the word of your launch on social media.</h3>
                <div id="hr"></div>
                <p>Your team could use social media and media ads to not only let people know about the church plant but
                    help create the sense of culture through images and videos. </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/School\ Newsletter\ pic.jpg');">
            <div id="description">
                <h1>School Newsletters</h1>
                <h3>Connect with families and support schools.</h3>
                <div id="hr"></div>
                <p>A compassion church reaches out to the community with a strong compassionate outreach as a means for
                    making disciples. The church can provide necessities like food or clothing as well as lead in times
                    of worship and discipleship. Click the link for an example of a compassion church.</p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/Door.jpg');">
            <div id="description">
                <h1>Door Hangers</h1>
                <h3>Target specific streets and neighborhoods by stopping by their houses.</h3>
                <div id="hr"></div>
                <p>This old idea still works. Paper door hangers work, but you could also consider hanging a small bag
                    on the door with info and goodies inside.
                </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/Shirt.png');">
            <div id="description">
                <h1>T-Shirts</h1>
                <h3>Be a walking billboard for your church.</h3>
                <div id="hr"></div>
                <p>Make shirts people will want to wear and will cause people to read and even inquire about your
                    church. Train people what to say when people ask about the church.</p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/Service\ Projects\ pic.jpg');">
            <div id="description">
                <h1>Service Projects</h1>
                <h3>Become part of the community.</h3>
                <div id="hr"></div>
                <p>You don’t want “from” the community; you want to be part of the community. Collect food, wash cars,
                    shovel snow, pick up trash, etc. to help make the community a better place. </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/pexels-ron-lach-10044373.jpg');">
            <div id="description">
                <h1>Block Parties</h1>
                <h3>Engage a block of neighbors and attract others.</h3>
                <div id="hr"></div>
                <p>Block parties engage neighbors who may not be part of your launch team but still desire community. It
                    is a great way to bring people together and share your cause. </p>
                <br>
            </div>
        </div>



        <div class="card"
            style="background-image: url('launch-imgs/Park\ pic.jpg');">
            <div id="description">
                <h1>Parks</h1>
                <h3>Intentionally meet neighbors at parks and sports fields.</h3>
                <div id="hr"></div>
                <p>Start up some pick-up ball games or launch bubbles for children to pop. Bring a cooler of drinks and
                    snacks to share or bring kites to help people to fly. </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/community\ ice\ cream.jpg');">
            <div id="description">
                <h1>Community Festivals</h1>
                <h3>Support community events.</h3>
                <div id="hr"></div>
                <p>Become a sponsor of an event, rent a booth, face paint, give out balloons, give out water bottles,
                    provide souvenir pictures. Don’t forget to wear your T-shirts and put logos on everything. </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/funeral\ home.jpg');">
            <div id="description">
                <h1>Funeral Homes</h1>
                <h3>Be a pastor to those who don’t have one.</h3>
                <div id="hr"></div>
                <p>Introduce yourself to local funeral homes and offer your services to families who don’t have a
                    pastor. This is a great way to be there for families at a difficult time in their lives.
                </p>
                <br>
            </div>
        </div>



        <div class="card" style="background-image: url('launch-imgs/network.png');">
            <div id="description">
                <h1>Community Networks</h1>
                <h3>Connect with existing organizations.</h3>
                <div id="hr"></div>
                <p>Take time to connect with social and outreach organizations in the community. Partner with them and
                    become part of their networks. You don’t need to reinvent the wheel; instead work with their
                    existing platforms.</p>
                <br>
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
                        Someone will reach out to you soon to help you begin cultivating what you need to know and
                        answer your questions.
                    </p>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            First Name
                        </label>
                        <input required="true" type="text" name="firstname" id="firstname"
                            class="formbold-form-input" />
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
                    <textarea required="true" type="text" name="descriptions" id="descriptions"
                        class="formbold-form-input" placeholder=""></textarea>
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
