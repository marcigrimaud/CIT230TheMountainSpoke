<!doctype html>
<html lang="en-us">
<head>
    
  <title>The Mountain Spoke Store</title>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <script src="scripts/main.js"></script>

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
            <div id="slideshow">

                <div id="sliderwrapper">

                    <div id="innerwrapper">
                        
                        <div class="slide" >
                            <div class="item">
                                <img src="images/bike1-large.jpg"
                                 sizes="100vw"

                                 srcset="
                                images/bike1-small.jpg 100w,
                                images/bike1-medium.jpg 200w, 
                                images/bike1-large.jpg 400w"

                                 alt="Image of the Contend SL 1 Disc bike in Matte Charcoal/Neon Green"
                                 >
                                <h2>Contend SL 1 Disc</h2>
                                <ul class="itemdescription">
                                    <li>Brand: Gaint</li>
                                    <li>Year: 2018</li>
                                    <li>Model: Road bike</li>
                                    <li>Price: $1,400</li>
                                    <li>Sizes: XS, S, M, M/L, L, XL</li>
                                    <li>colors: Matte Charcoal/Neon Green</li>
                                    <li>Frame: 	ALUXX SL-grade aluminum</li>
                                    <li>Forks: Composite with Alloy OverDrive Steerer</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="slide" >
                            <div class="item">
                                <img src="images/bike2-large.jpg"
                                 sizes="100vw"

                                 srcset="
                                images/bike2-small.jpg 100w,
                                images/bike2-medium.jpg 200w, 
                                images/bike2-large.jpg 400w"

                                 alt="Image of the Talon 3 bike in Black/Neon Red."
                                 >
                                <h2>Talon 3</h2>
                                <ul class="itemdescription">
                                    <li>Brand: Gaint</li>
                                    <li>Year: 2018</li>
                                    <li>Model: Mountain Bike</li>
                                    <li>Price: $520</li>
                                    <li>Sizes: S, M, L, XL</li>
                                    <li>colors: 	Satin Black/Neon Red, Black/Fuchsia/Blue</li>
                                    <li>Frame: 	ALUXX-grade aluminum</li>
                                    <li>Forks: 	SR Suntour XCT HLO, hydraulic lockout, preload adjust, 100mm travel</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="slide" >
                                <div class="item">
                                <img src="images/bike3-large.jpg"
                                 sizes="100vw"

                                 srcset="
                                images/bike3-small.jpg 100w,
                                images/bike3-medium.jpg 200w, 
                                images/bike3-large.jpg 400w"

                                 alt="Image of the Trance 3 bike in Charcoal/Orange/Black."
                                 >
                                <h2>Trance 3</h2>
                                <ul class="itemdescription">
                                    <li>Brand: Gaint</li>
                                    <li>Year: 2018</li>
                                    <li>Model: Mountain Bike</li>
                                    <li>Price: $2,300</li>
                                    <li>Sizes: S, M, L, XL</li>
                                    <li>colors: Charcoal/Orange/Black, Satin Neon Green/Black</li>
                                    <li>Frame: ALUXX SL-grade aluminum, Advanced forged composite upper rocker, 140mm Maestro suspension</li>
                                    <li>Forks: SR Suntour Aion 35, Boost, OverDrive, 150mm travel</li>
                                    <li>Shock: RockShox Deluxe R, Trunnion mount</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                    <div id="prev" class= "button" ></div>
                    <div class="button" id="next"></div>

            </div>
            
        </section>
        
        
        
        
      </main>
         
          
         <footer>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>	
          
        </footer>
    
    <section>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/cpyrghtfooter.php'; ?>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/hamburger.js"></script>
    <script src="scripts/main.js"></script>
    


</body>
</html>
