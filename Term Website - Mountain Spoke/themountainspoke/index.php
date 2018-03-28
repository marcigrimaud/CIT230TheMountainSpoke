<!doctype html>
<html lang="en-us">
<head>
    
    <title>The Mountain Spoke</title>
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
          
        <section class="bdypage">
        <section class="columnforpage">    
            <section class="columns">
                <img src="images/hpgtrails-large.jpg"
                 sizes="100vw"

                 srcset="
                images/hpgtrails-small.jpg 100w,
                images/hpgtrails-medium.jpg 200w, 
                images/hpgtrails-large.jpg 400w"

                 alt="Image of a mountain biker jumping through the woods on an awesome green trail"
                 >
                <h2>Trails &amp; Tours</h2>
                <p>Ride year-round with our seasonal trail information and trail tours. We offer information about different trails that anyone can ride. If you are new to certain trails we can help you get to know them with our trail tours.
                </p>
                </section>  

                <section class="columns">
                <img src="images/hpgevent-large.jpg"
                 sizes="100vw"

                 srcset="
                images/hpgevent-small.jpg 100w,
                images/hpgevent-medium.jpg 200w, 
                images/hpgevent-large.jpg 400w"

                 alt="Image of Blue team biking in the woods at one of our annual events"
                 >
                <h2>Events</h2>
                <p>At The Mountain Spoke, we’re always looking for ways to expand and improve the biking community. Outside of our regular work hours, you might find us hosting bike clinics in our shop or putting on events around town and even the world.</p>
                </section> 

                <section class="columns">
                <img src="images/hpgservice-large.jpg"
                 sizes="100vw"

                 srcset="
                images/hpgservice-small.jpg 100w,
                images/hpgservice-medium.jpg 200w, 
                images/hpgservice-large.jpg 400w"

                 alt="One of our workers working on a riders bicylce"
                 >
                <h2>Services</h2>
                <p>Bikes are designed to run well for a long time with proper care and maintenance. The professionals at The Mountain Spoke are here to provide quality service when you bike isn’t running at its full potential or just needs a little extra TLC. Appointments are not required to stop by anytime to talk to one of our mechanics about what we can do for you!</p>
                    
            </section>
        </section>
            <section class="columns">
                 <h1 class="buttonlabel">
                     <button type="button" onclick="window.location.href='tours.php'">
                   Join Us on the Trails Now
                </button>
                </h1>
            </section>
            
          
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
