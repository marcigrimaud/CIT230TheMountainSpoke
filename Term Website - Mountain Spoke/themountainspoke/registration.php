<!doctype html>
<html lang="en-us">
<head>
  
  <title>Cycle the Continental Divide Registraction</title>
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
                <form  action="feedbackreg.php" method="post" enctype="multipart/form-data" name="registractionform" id="registractionform">
                        <fieldset>
                            <legend> <h1>Registration Form</h1></legend>
                                <label><span>Full Name:</span> <input name="fullname" type="text" required> 
                                </label><br><br>

                                <label><span>Email:</span> <input name="email" type="email" placeholder="example@gmail.com" >
                                </label><br><br>

                                <label><span>Phone Number:</span> <input name="phonenumber" type="tel" required>
                                </label><br><br>
                            
                                <label><span>Date of Birth:</span> <input name="bday" type="date" required>
                                </label><br><br>
                            
                                <label><span>Please enter in your State and/or country:</span> <input name="location" type="text" required>
                                </label><br><br>
                            
                            
                                <h4><label>Additional Information About You:
                                    <textarea name="message" rows="5" cols="40" placeholder="Enter your message here..." ></textarea>
                                </label></h4><br><br>

                        </fieldset>
                        <br>
                        
                        <!-- BUTTON-->
                        <input type="submit" value="submission" class="subbutton">
                            <input name="redirect" type="hidden" value="feedbackreg.php">


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