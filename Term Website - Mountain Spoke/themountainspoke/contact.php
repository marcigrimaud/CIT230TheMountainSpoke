<!doctype html>
<html lang="en-us">
<head>
  
  <title>Contact Us</title>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    
</head>
<body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>	
        
      <!-- site navigation for dropdown then normal -->
      <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?>	
      </nav>
    </header>
    
    
    <main>

        <figure>

            <img class="bannerimage" src="images/hpgbanner-large.jpg"
                 sizes="100vw"

                 srcset="
                images/hpgbanner-small.jpg 600w,
                images/hpgbanner-medium.jpg 900w, 
                images/hpgbanner-large.jpg 1000w"

                 alt="Banner images of Mountain Biking"
                 >

        </figure>
          
            <section class="columns">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.948738844249!2d-111.09299134864276!3d45.67192937900131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5345458559cf66a1%3A0x858c0351ba741919!2s3950+Valley+Commons+Dr%2C+Bozeman%2C+MT+59718!5e0!3m2!1sen!2sus!4v1512603350949" style="border:0" allowfullscreen></iframe>
                
                <h2>Contact Us</h2>
                
                    <p>themountainspoke@gmail.com</p>
                    <p>3950 Valley Commons Drive, <br>
                        Bozeman, MT</p>
                    <p>555-262-3904</p>
                    <form  action="reply.php" method="post" enctype="multipart/form-data" name="contactform" id="contactsubmissionform">
                        <fieldset>
                            <legend> <h1>Personal Information</h1></legend>
                                <label><span>Full Name:</span> <input name="fullname" type="text" required> 
                                </label><br><br>

                                <label><span>Email:</span> <input name="email" type="email" placeholder="example@gmail.com" >
                                </label><br><br>

                                <label><span>Phone Number:</span> <input name="phonenumber" type="tel" required>
                                </label><br><br>
                            
                                <h4><label>Your Message:
                                    <textarea name="message" rows="5" cols="30" placeholder="Enter your message here..." ></textarea>
                                </label></h4> <br><br>

                        </fieldset>
                        <br>
                        
                        <!-- BUTTON-->
                        <input type="submit" value="submission" class="subbutton">
                            <input name="redirect" type="hidden" value="reply.php">


                    </form>	
                </section>  
          

      </main>

      <footer>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>	
          
        </footer>
    
    <section>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/cpyrghtfooter.php'; ?>
    </section>
    
    <script src="scripts/hamburger.js"></script>

</body>
</html>