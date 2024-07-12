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
    <title>Imagine</title>
    <link rel="stylesheet" href="imagine.css">
    <script src="nav.js" defer></script>
</head>
<body>


    <a href="index.php"><h1 id="nav_h1">Church Planting</h1></a>
    <nav>
        <img src="CCD_logo_white.png" alt="">

        <h1></h1>

        <img id="menu" src="hamburger-menu.png" alt="">
        <ul id="ul">
            <a href="http://">5 Stages</a>
            <a href="http://">FAQs</a>
            <a href="http://">Connect</a>
        </ul>
        <ul id="ul2">
            <a href="http://">5 Stages</a>
            <a href="http://">FAQs</a>
            <a href="http://">Connect</a>
        </ul>
    </nav>


    <video src="videos/Church Planting Inspire.mp4" autoplay muted loop></video>

    <section id="desc">
        <p>
            <b>Stage One</b> in the Church Planting process is <b>IMAGINE</b>.
            <br>
            In this process, you are encouraged to spend time in prayer seeking guidance from God to determine WHERE and TO WHOM you could reach the gospel with.
            <br>
            <br>
            In this stage, IMAGINE the answers for these four questions…
            <br>
            <ul>
                <li><b>Where</b> do you sense God calling you to serve?</li>
                <li><b>What people group</b> do you sense God calling you to specifically target in your efforts?</li>
                <li><b>What "style"</b> of church do you think would be most impactful in reaching that people group?</li>
                <li><b>What church "model"</b> do you think would best accommodate your needs?</li>
            </ul>            
            <br>
            See below for more details about a church style and church model.
            <br>
            When you have a general answer to these four questions, please complete the form at the bottom of the page to begin cultivating your ideas with the help of a coach, a team of planters, web-based training, conferences, and more.
            <br>
        </p>
    </section>


    <h1 id="styles-title">Church Styles</h1>
    <h5 id="styles">
        Church "Styles" describe the culture of the church gathering that may be best for the people you feel led to reach.
        <br>
        Below are some sample styles of churches.
        <br>
        <br>
        Hover over the images for descriptions and links to examples.
        <br>
        These are just ideas meant to help you imagine how God is leading you.
    </h5>


    <section>
        <div class="card" style="background-image: url('Imagine\ -\ Church\ Themes/table.png');">
            <div id="description">
                <h1>Table</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A table church seeks to interact in the lives of others by fellowshipping with them, feeding them, and helping them become followers of Jesus Christ. Gathering times can take place around a table(s) with discussion and fellowship. Click the link for an example of a table church.                </p>
                <a href="https://www.youtube.com/watch?v=5_DQRFDWGxM" target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine\ -\ Church\ Themes/ball-8279729_1280.jpg');">
            <div id="description">
                <h1>Sports</h1>
                <h3>Know anyone who enjoys sports?</h3>
                <div id="hr"></div>
                <p>Basketball, soccer, golf, pickleball, etc…- A sports church is designed around sports teams and leagues. People can gather to play a sport with designated times for worship, discipleship, and outreach. Click the link for an example of a sports church.                </p>
                <a href="https://www.bballchurch.com/?fbclid=IwZXh0bgNhZW0CMTAAAR2Bt58N7bp3x4yk9zSR0n3sHkv35At1cwNb0V0v7mhy1xW4-v85AyplWpI_aem_ZmFrZWR1bW15MTZieXRlcw                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine\ -\ Church\ Themes/pexels-cottonbro-4691567.jpg');">
            <div id="description">
                <h1>Board Game</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A board game church is based around the thrill of playing games. It can gather in a home or community center. Times of worship, discipleship, and outreach can take place in traditional or organic ways. Click the link for ideas about board games and church.                </p>
                <a href="https://thinkchristian.net/faith-fellowship-and-board-games                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/pexels-mart-production-8078366.jpg');">
            <div id="description">
                <h1>Compassion</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A compassion church reaches out to the community with a strong compassionate outreach as a means for making disciples. The church can provide necessities like food or clothing as well as lead in times of worship and discipleship. Click the link for an example of a compassion church.</p>
                <a href="https://homelesschurch.org/                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine\ -\ Church\ Themes/coffee-6984075_1280.jpg');">
            <div id="description">
                <h1>Coffee</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A church can meet in a coffee shop or home and use coffee or tea as a means of making disciples. This church can create an informal format that generates dialogue that still can incorporate times of worship and intentional discipleship. Click the link for an example of a coffee church.                </p>
                <a href="https://www.youtube.com/watch?v=fFH3ZkTbxc8                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/pexels-pixabay-159369.jpg');">
            <div id="description">
                <h1>Gaming</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A gaming church can meet virtually or in person. It can appeal to a variety of gamers and include a variety of platforms for discipleship and outreach. Click the link for an example of a gaming church.                </p>
                <a href="https://www.godsquadchurch.com/" target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/pexels-jopwell-2422290.jpg');">
            <div id="description">
                <h1>Recovery</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A recovery church can target those who are recovering from an addiction and their families. Similar to a support group, a recovery church can include times of sharing, encouragement, and accountability but also times of worship and outreach. Click the link for an example of a recovery church.                 </p>
                <a href="https://www.recovery.church/                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/old-people-616718_1280.jpg');">
            <div id="description">
                <h1>Seniors</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A church can meet in a retirement community to offer worship services and discipleship. Click the link for ideas for assisted living churches.                </p>
                <a href="https://spiritualeldercare.com/church-services/                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/pexels-mateusz-dach-99805-581295.jpg');">
            <div id="description">
                <h1>Biker</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A church can appeal to bikers. It can meet in a variety of settings and incorporate worship, discipleship, and outreach in a way that best fits their congregation. Click the link for an example of a biker church.                 </p>
                <a href="https://www.facebook.com/salvageyardbikerchurch/                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine\ -\ Church\ Themes/pexels-cottonbro-8041993.jpg');">
            <div id="description">
                <h1>MartialArts / Fitness</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A fitness church can meet in a gym or any open area and appeal to anyone who desires to move and live well. A church can help people train physically, emotionally, and spiritually. Click the link for more information about faith and fitness.                </p>
                <a href="https://faithandfitness.net/why-the-church-should-be-doing-fitness/                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/pexels-pixabay-159644.jpg');">
            <div id="description">
                <h1>Art</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>An arts and crafts church can focus on the use of God-given artistic and creative talents. A church can create, worship, and disciple all at the same time. Click the link for a sample craft ministry.                </p>
                <a href="https://driftlessministry.org/crafting-hands/                " target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
 
        <div class="card" style="background-image: url('Imagine - Church Themes/pexels-pavel-danilyuk-7234389.jpg');">
            <div id="description">
                <h1>Cinema</h1>
                <h3>Know anyone who enjoys basketball?</h3>
                <div id="hr"></div>
                <p>A cinema or movie church seeks to either gather in a movie theatre or meet in another facility but use movies as the platform of discussion by watching full movies or movie clips to discuss the word of God. Click the link for a review of a church meeting in a movie theatre.</p>
                <a href="https://www.facebook.com/thisishilltop/videos/1012286099291457/" target="_blank"><button>Learn More</button></a>
            </div>
        </div>

       
       
    </section>




    <section>

        <div id="other-card-container">

            <div id="words">
                <h1>Church Models</h1>

                <p>
                    Church “Model” refers to the structure the church plant could possibly take.
                    <br>
                    Below are some sample models.
                    <br>
                    A church could possibly be a hybrid of a couple different models.
                    <br>
                    <br>
                    The Church “Type” is different from the church “Model.”
                    <br>
                    For example, a Table Church (type) could use a House Church Model meeting in one home, or a Table Church (type) could use an Organic Model that moves from place to place.
                </p>
            </div>


            <div id="other-cards">
                <div class="other-card">
                    <div id="other-card-inner-one">
                        <div id="front">
                            <img src="Icons/Traditional Church (official).png" alt="">
                            <h2>Traditional</h2>
                            <button onclick="flip()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>Traditional</h2>
                            <p>A new church that intends to operate in the manner that most Americans still identify with as a church.                            </p>
                            <button onclick="flipBack()">Go Back</button>
                        </div>                        
                    </div>
                </div>

                <div class="other-card">
                    <div id="other-card-inner-two">
                        <div id="front">
                            <img src="Icons/High Impact Church (official).png" alt="">
                            <h2>High Impact</h2>
                            <button onclick="flip2()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>High Impact</h2>
                            <p>Churches that strategically plan to start and/or reach 200 plus from the launch day on.                            </p>
                            <button onclick="flipBack2()">Go Back</button>
                        </div>  
                    </div>
                </div>

                <div class="other-card">
                    <div id="other-card-inner-three">
                        <div id="front">
                            <img src="Icons/Multi-Site Church (official).png" alt="">
                            <h2>Muti-Site / Campus</h2>
                            <button onclick="flip3()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>Multi-Site Campus</h2>
                            <p>A specific church congregation which holds services at multiple geographical locations, either within a specific metropolitan area or, increasingly, several such areas.                            </p>
                            <button onclick="flipBack3()">Go Back</button>
                        </div>  
                    </div>
                </div>

                <div class="other-card">
                    <div id="other-card-inner-four">
                        <div id="front">
                            <img src="Icons/Micro Church (official).png" alt="">
                            <h2>Micro</h2>
                            <button onclick="flip4()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>Micro</h2>
                            <p>An intentionally simple, streamlined approach to church that is often small, volunteer led, and informal in style.                            </p>
                            <button onclick="flipBack4()">Go Back</button>
                        </div>  
                    </div>
                </div>
            </div>



            <div id="other-cards">

                <div class="other-card">
                    <div id="other-card-inner-five">
                      <div id="front">
                          <img src="Icons/House Church (official).png" alt="">
                          <h2>House</h2>
                          <button onclick="flip5()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>House</h2>
                            <p>An intentionally simple, streamlined approach to church that is often small, volunteer led, and informal in style.                            </p>
                            <button onclick="flipBack5()">Go Back</button>
                        </div>  
                    </div>
                </div>

                <div class="other-card">
                    <div id="other-card-inner-six">
                        <div id="front">
                            <img src="Icons/Organic Church (official).png" alt="">
                            <h2>Organic</h2>
                            <button onclick="flip6()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>Organic</h2>
                            <p>Churches that meet in a house, coffee shop, business break room, park or in a nursing home and seek to reproduce other churches in a geographic area.                            </p>
                            <button onclick="flipBack6()">Go Back</button>
                        </div>  
                    </div>
                </div>

                <div class="other-card">
                    <div id="other-card-inner-seven">
                        <div id="front">
                            <img src="Icons/Church within a Church (official).png" alt="">
                            <h2>Church within a Church</h2>
                            <button onclick="flip7()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>Church within a Church</h2>
                            <p>A church that operates different styles of worship services, including multi-cultural/language churches, in the same building.                            </p>
                            <button onclick="flipBack7()">Go Back</button>
                        </div>  
                    </div>
                </div>

                <div class="other-card">
                    <div id="other-card-inner-eight">
                        <div id="front">
                            <img src="Icons/Interwoven Church (official).png" alt="">
                            <h2>Interwoven</h2>
                            <button onclick="flip8()">Learn More</button>
                        </div>
                        <div id="back">
                            <h2>Interwoven</h2>
                            <p>A church that operates similar to a traditional church with an unorthodox service style with music and creative worship interwoven with scripture reading and sharing.                            </p>
                            <button onclick="flipBack8()">Go Back</button>
                        </div>  
                    </div>
                </div>
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

    


    <script defer>
        function flip() {
            let current = document.getElementById('other-card-inner-one');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack() {
            let currentBack = document.getElementById('other-card-inner-one');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip2() {
            let current = document.getElementById('other-card-inner-two');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack2() {
            let currentBack = document.getElementById('other-card-inner-two');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip3() {
            let current = document.getElementById('other-card-inner-three');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack3() {
            let currentBack = document.getElementById('other-card-inner-three');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip4() {
            let current = document.getElementById('other-card-inner-four');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack4() {
            let currentBack = document.getElementById('other-card-inner-four');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip5() {
            let current = document.getElementById('other-card-inner-five');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack5() {
            let currentBack = document.getElementById('other-card-inner-five');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip6() {
            let current = document.getElementById('other-card-inner-six');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack6() {
            let currentBack = document.getElementById('other-card-inner-six');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip7() {
            let current = document.getElementById('other-card-inner-seven');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack7() {
            let currentBack = document.getElementById('other-card-inner-seven');
            currentBack.style.transform = 'rotateY(0deg)';
        }
        function flip8() {
            let current = document.getElementById('other-card-inner-eight');
            current.style.transform = 'rotateY(180deg)';
        }
        function flipBack8() {
            let currentBack = document.getElementById('other-card-inner-eight');
            currentBack.style.transform = 'rotateY(0deg)';
        }
    </script>

</body>
</html>
