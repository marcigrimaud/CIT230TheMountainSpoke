<!doctype html>
<html lang="en-us">
<head>
  
  <title>Services</title>
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
            
            <table>
                <tr>
                    <th>Service Bundles</th>
                    <th>What is included</th>
                    <th>Prices</th>
                </tr>
                <tr>
                    <td class="bundle">Full Tune-Up</td>    
                    <td><ul>
                            <li>Adjust Front &amp; Rear Brakes and Shifting</li>
                            <li>Inspect Bolts and Bearings</li>
                            <li>True Both Wheels</li>
                        </ul>
                    </td>
                    <td>$99</td>
                </tr>
                <tr>
                    <td class="bundle">Annual Tune-Up</td>    
                    <td><ul>
                            <li>Full Tune-Up Plus</li>
                            <li>Ultra Sonic Drivetrain Cleaning</li>
                            <li>Replace Cables &amp; Housing</li>
                        </ul>
                    </td>
                    <td>$199</td>
                </tr>
                <tr>
                    <td class="bundle">MTB Tune</td>    
                    <td><ul>
                            <li>Annual Tune-Up Plus</li>
                            <li>Complete Disassembly &amp; Reassembly</li>
                            <li>Overhaul Headset &amp; Bottom Bracket</li>
                            <li>Ultrasonic Drivetrain cleaning</li>
                        <li>Suspension pivot Service &amp; Replacement</li>
                        </ul>
                    </td>
                    <td>$399</td>
                </tr>
            
            </table>
            
            
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
