<!doctype html>
<html lang="en-us">
<head>
  
  <title>Thank You</title>
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
        
                <form action="reply.php" method="post" enctype="multipart/form-data" name="contactform" id="contactsubmissionform">

                   <fieldset>
                    <legend><h2>Thank You for Contacting Us</h2></legend>
                       <p><label>Thank you for contacting us. Please wait 24 hours for us to repsond to your message
                                    </label></p>

                    </fieldset>	  
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