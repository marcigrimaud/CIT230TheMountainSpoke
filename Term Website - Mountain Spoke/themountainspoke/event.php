<!doctype html>
<html lang="en-us">
<head>
  
  <title>Events</title>
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
            <section class="eventpage">
                
                <h1>Highlighted Events</h1>
                    <section class="event">
                        <h2>Cycle the Continental Divide</h2>
                            <img src="images/contentialdivide-large.jpg"
                                 sizes="100vw"

                                 srcset="
                                images/ contentialdivide-small.jpg 100w,
                                images/contentialdivide-medium.jpg 100w, 
                                images/contentialdivide-large.jpg 300w"

                                 alt="Image of the routes for the Cycle the Continental Divide"
                                 >
                            <p> This is an annual event that we sponsor and suppose to be one of the most exciting and challenging events out there. The Cycle the Continental Divide is longest off-pavement cycle route that is broken into 7 parts.
                            </p>
                            <ul>
                                <li>Date: May 1st, 2018 to June 10th, 2018  </li>
                                <li>Cost per Section: $100.00</li>
                                <li>Requirements: Moutain Bike, Spare Tubes, Air Pump, Camel Pack, Food, Sleep bags, Tool Repair kit, and Helmet<br><br>
                                MUST BE OVER THE AGE OF 21.<br><br>
                                </li>
                                <li><a href="registration.php">Register Here!</a></li>
                            </ul>

                            <table class="eventtable">
                                <tr>
                                    <th>Route</th>
                                    <th>Distance</th>
                                </tr>
                                <tr>
                                    <td>Canada - Banff,AB to Roosville, MT</td>
                                    <td>256.6 mi</td>
                                </tr>
                                <tr>
                                    <td>Roosville, MT to Polaris, MT</td>
                                    <td>542.3 mi</td>
                                </tr>
                                <tr>
                                    <td>Polaris, MT to South Pass City, WY</td>
                                    <td>510.4 mi</td>
                                </tr>
                                <tr>
                                    <td>South Pass CIty, WY to Silverthorne, CO</td>
                                    <td>403.9 mi</td>
                                </tr>
                                <tr>
                                    <td>Silverthorne, CO to Platoro, CO</td>
                                    <td>316.5 mi</td>
                                </tr>
                                <tr>
                                    <td>Platoro, CO to Pie Town, NM</td>
                                    <td>430.1 mi</td>
                                </tr>
                                <tr>
                                    <td>Pie Town, NM to Antelope Wells, NM</td>
                                    <td>307.8 mi</td>
                                </tr>
                            </table>        
                    </section>
                <h1>Future Events</h1>
                <section class="event">
                        <h2>First Ride of the New Year 2018</h2>
                            <img src="images/newyearride-large.jpg"
                                 sizes="100vw"

                                 srcset="
                                images/newyearride-small.jpg 100w,
                                images/newyearride-medium.jpg 100w, 
                                images/newyearride-large.jpg 300w"

                                 alt="Image of a last year's First Ride of the New Year"
                                 >
                            <p> To bring in the New Year, we will be hosting a ride day through Bozeman, MT. We will start at The Mountain Spoke and bike to Trail Head Lick Creek and ride the 9-mile loop and back to The Mountain Spoke for Water and Hot Chocolate.
                            </p>
                            <ul>
                                <li>Date: Janruary 10, 2018</li>
                                <li>Cost: $30.00 </li>
                                <li>Route: The Mountain Spoke Shop to Lick Creek and Back</li>
                                <li>Requirements: Bike, Camel Pack, and Helmet</li>
                            </ul>
                    
                </section>
                <section class="event">
                        <h2>Spring Break Bike Race</h2>
                            <img src="images/springbreakrace-large.jpg"
                                 sizes="100vw"

                                 srcset="
                                images/springbreakrace-small.jpg 100w,
                                images/springbreakrace-medium.jpg 100w, 
                                images/springbreakrace-large.jpg 300w"

                                 alt="Image of a mountain biker jumping through the woods on an awesome green trail"
                                 >
                            <p> This is an annual event that we sponsor once a year. It is a three-day event for all types of riders. Day 1 will be for beginners and Day 2 is for Novice riders, and Day 3 will end with the Pro(Experts) riders.
                            </p>
                            <ul>
                                <li>Date: April 20th, 2018</li>
                                <li>Cost: $45.00 </li>
                                <li>Routes:
                                    <ul class="sublist">
                                        <li>Beginner: Lick Creek</li>
                                        <li>Novice: Bangtail Divide</li>
                                        <li>Expert/Pro: Truman Gultch</li>
                                    </ul>
                                </li>
                                <li>Requirements: Camel Back, Spare Tube, Tool Repair Kit, Food, and Helmet </li>
                            </ul>
                </section>
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
