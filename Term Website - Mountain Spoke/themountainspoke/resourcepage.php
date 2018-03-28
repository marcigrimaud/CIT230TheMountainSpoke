<!doctype html>
<html lang="en-us">
<head>
  
  <title>The Resource Page</title>
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
            <section class="resources">
            
                <h2>Resources</h2>
                <ul>
                    <li><a href="https://www.mtbproject.com/directory/8009008/bozeman
">www.mtbproject.com/directory/8009008/bozeman</a></li>
                    <li><a href="https://www.giant-bicycles.com/us/contend-sl-1-disc
">www.giant-bicycles.com/us/contend-sl-1-disc</a></li>
                    <li><a href="https://www.giant-bicycles.com/us/talon-3
">www.giant-bicycles.com/us/talon-3</a></li>
                    <li><a href="https://www.giant-bicycles.com/us/trance-3
">www.giant-bicycles.com/us/trance-3</a></li>
                    <li><a href="https://www.adventurecycling.org/routes-and-maps/adventure-cycling-route-network/great-divide-mountain-bike-route/
">www.adventurecycling.org/routes-and-maps/adventure-cycling-route-network/great-divide-mountain-bike-route/</a></li>
                    <li><a href="https://www.owenhousecycling.com/
">www.owenhousecycling.com/</a></li>
                    <li><a href="https://www.singletracks.com/Mountain-Bike-Trails-bike-trails_0.html?filterBy=%7Cloc:45.679722~-111.037778~25~Bozeman%2C+MT
 
">www.singletracks.com/Mountain-Bike-Trails-bike-trails_0.html?filterBy=%7Cloc:45.679722~-111.037778~25~Bozeman%2C+MT</a></li>
                </ul>
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
