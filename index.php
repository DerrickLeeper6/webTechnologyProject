<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Technology Project Part 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="function.js"></script>
</head>
<body>
    <nav id = "locationNav" class = "navbar navbar-expand-lg navbar-dark  navStyling">
        <!-- <div class="container-fluid"> -->
            <div id = "homeDiv" class="navbar-header">
                <a href = "index.php"><img src = "images/logo.png" height = "46px"/></a>
            </div>
            <ul class = "nav navbar-nav" id = "tabs">

                <li id = "homeDiv" class = "nav-item active">
                    <a class = "nav-link" data-toggle="tab" href = "index.php">Home&ensp;</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="restDrop" role="button" data-toggle="dropdown" aria-haspopup="true">
                        Restaurants/Bars
                    </a>
                    <div id = 'restBarDrop' class="dropdown-menu" aria-labelledby="restDrop">
                        
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="entDrop" role="button" data-toggle="dropdown" aria-haspopup="true">
                        Fashion
                    </a>
                    <div id = 'fashDrop' class="dropdown-menu" aria-labelledby="entDrop">
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="entDrop" role="button" data-toggle="dropdown" aria-haspopup="true">
                        Entertainment
                    </a>
                    <div id = 'enteDrop' class="dropdown-menu" aria-labelledby="entDrop">
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="entDrop" role="button" data-toggle="dropdown" aria-haspopup="true">
                        Other
                    </a>
                    <div id = 'otherDrop' class="dropdown-menu" aria-labelledby="entDrop">
                    </div>
                </li>                



            </ul>
        <!-- </div> -->
    </nav>

    <div class = "tab-content" id = 'body'>
        <div id = "home" class="tab-pane fade show active">
            <br/>
            <div class = "header">
                <h1 class = "title">Live 6 Neigborhood</h1>
                <h3><em>Discover what lies on the Avenue of Fashion</em></h3>
                <hr/>
            </div>
            <div id = "pictureCarousel" class = "carousel slide" data-ride = "carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block   " src="images/image1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block  " src="images/image2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block  " src="images/image3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block  " src="images/image4.png" alt="Fourth slide">
                    </div>
                </div>
            </div>

            <hr/>
            <div class = "row">
                <div class="col" style = "text-align: center;">
                    <i class="fas fa-utensils fa-7x"></i> <br/>
                    <h3 >Restaurants</h3>
                    <div id = 'restaurants'>

                    </div>

                </div>
                <div class="col" style = "text-align: center;">
                    <i class="fas fa-tshirt fa-7x"></i> <br/>
                    <h3 >Fashion</h3>
                    <div id = 'fashion'>
                    </div>
                </div>
                <div class="col" style = "text-align: center;">
                    <i class="fas fa-paint-brush fa-7x"></i> <br/>
                    <h3 >Entertainment</h3>
                    <div id = 'entertainment'>
                    </div>
                </div>
                <div class="col" style = "text-align: center;">
                    <i class="fas fa-gas-pump fa-7x"></i><br/>
                    <h3 >Gas</h3>
                    <div id = 'other'>
                    </div>
                </div>                

            </div>
            
            <hr/>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Livernois%20Ave%20and%20Mcnichols&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no">
                    </iframe>
                    <a href="https://www.pureblack.de/google-maps/">pureblack.de</a>
                </div>
            </div>            
        </div>

        <!-- <div id="kuzzos" class="tab-pane fade">
            <br />
            <div class="header">
                <h1 class="title">Kuzzo&apos;s Chicken and Waffles</h1>
                <h3><em>Celebrating Food, Family & Friends</em></h3>
                <hr />
            </div>

            <h3 class="kuzzosTitle">Our Hours</h3>
                <hr />
                <table align="center" class = "table">
                    <thead>
                        <tr>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Closed</td>
                            <td>8AM–9PM</td>
                            <td>8AM–9PM</td>
                            <td>8AM–9PM</td>
                            <td>8AM–10PM</td>
                            <td>8AM–10PM</td>
                            <td>8AM–6PM</td>
                        </tr>
                    </tbody>
                </table>
            <hr/>

            <div class = "row">
                <div class =  "col-md-4">
                    <h2 class = "title">Contact Us</h2>
                    <h3 style = "text-align: center;">(313) 861-0229</h3>
                    <div style = "text-align: center;"><h3><a href = "https://www.facebook.com/Kuzzos-Chicken-Waffles-816008108486745/">Facebook</a></h3></div>
                    <div style = "text-align: center;"><h3><a href = "https://www.instagram.com/kuzzoschickenandwaffles/?hl=en">Instagram</a></h3></div>
                    <br/>
                    <br/>
                    <h2 class = "title">Location</h2>
                    <h3 style = "text-align: center;">
                        19345 Livernois Ave., Detroit, MI 48221
                    </h3>

                </div>

                <div id="kuzzosCarousel" class="carousel slide col-md-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block " src="kuzzos.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="kuzzos2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="kuzzos3.jpg" alt="First slide">
                        </div>
                    </div>
                </div>
                
                <div class =  "col-md-4">
                    <h4 class = "title">KUZZO • noun</h4>
                    <p style = "text-align: center;">
                        <em>| Pronounced: cuz-oh |</em>
                    </p>
                        <ul style = "text-align: center;">
                            <li>a term of endearment for one who is a friend or family member</li>
                            <li>someone who has a cousin-like relationship with another person, regardless of blood-relation</li>
                        </ul>
                    </p>
                </div>                                
            </div>

            <hr/>
            <h1 class="kuzzosTitle">Our Menu</h1>
            <h3 class = "title" style = "text-align: center; font-weight: bold">Kuzzo&apos;s Waffle Combos</h3>
            <h6 style = "text-align: center; font-weight: bold">SERVED ALL DAY</h6>
            <br/>
            <div class = "container">
                <div class = "row" style = "text-align: center;">
                    <div class="col-sm">
                        <h4><strong>1. WHAT UP DOE</strong>&ensp;&ensp;&ensp;&ensp;15</h4>
                        <p>3pc fried chicken, 2 waffles, grits & 2 eggs w/cheese</p>

                        <h4><strong>2. TREY-DEUCE</strong>&ensp;&ensp;&ensp;&ensp;&ensp;12</h4>
                        <p>3pc fried chicken, 2 waffles</p>

                        <h4><strong>3. LALA</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;6</h4>
                        <p>1 waffle, 2 eggs w/cheese & bowl of grits</p>
                    </div>
                    <div class="col-sm">
                        <h4><strong>4. GRANNY PLUM</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;9</h4>
                        <p>2 waffles, 2 eggs & a bowl of grits</p>

                        <h4><strong>5. TWEETY BIRD</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;7</h4>
                        <p>2 wings, 1 waffle</p>

                        <h4><strong>6. THE FIRST LADY</strong>&ensp;&ensp;&ensp;&ensp;8</h4>
                        <p>Chicken breast & waffle</p>
                        
                        <h4><strong>7. DARK & LOVELY</strong>&ensp;&ensp;&ensp;&ensp;7</h4>
                        <p>1 thigh, 1 drumstick & a waffle</p>
                    </div>
                    <div class="col-sm">
                        <h4><strong>8. BAM BAM</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;6</h4>
                        <p>2 drumsticks & a waffle</p>
                    
                        <h4><strong>9. BIG PAPPA</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;16</h4>
                        <p>T-bone steak 10 oz., 2 eggs, waffle w/homestyle potatoes (plain or smothered)</p>
                    
                        <h4><strong>10. TENDER LOVE</strong>&ensp;&ensp;&ensp;&ensp;9</h4>
                        <p>3 hand-battered chicken tenders & a waffle</p>
                    
                    </div>
                </div>
            </div>

            <br/><br/><br/>
            <h3 class = "title" style = "text-align: center; font-weight: bold">Kuzzo&apos;s Southern Comforts</h3>
            <br/>
            <div class = "container">
                <div class = "row" style = "text-align: center;">
                    <div class="col-sm">
                        <h4><strong>BIG MAMA’S</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;15</h4>
                        <p>2pc chicken, your choice of 3 sides & homemade cornbread</p>

                        <h4><strong>SHRIMP & GRITS</strong>&ensp;&ensp;&ensp;&ensp;&ensp;13</h4>
                        <p>Sauteed shrimp, scallions, bacon served over a bowl of creamy cheese grits</p>
                    </div>
                    <div class="col-sm">
                        <h4><strong>BELLE ISLE BASKET</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;10</h4>
                        <p>Your choice of either 6 crispy fried shrimp or 2 southern fried catfish filets and a basket of chips, served with lemon wedge, and our signature tartar sauce</p>

                        <h4><strong>BIG RED</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;14</h4>
                        <p>Red velvet waffle served with 3 wings or tenders, 1 side and bourbon maple syrup</p>
                    </div>
                    <div class="col-sm">
                        <h4><strong>HAZEL’S SOUTHERN PLATTER</strong>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;15</h4>
                        <p>Your choice of one the following: 3pc Fried Chicken, 2 Salmon Croquettes, 3 Tenders, 2pc Catfish; or mix one piece of chicken & fish - served w/ 2 sides & cornbread</p>
                    
                        <h4><strong>VICKI’S VEGGIE PLATE</strong>&ensp;10</h4>
                        <p>3 sides w/ cornbread</p>
                    </div>
                </div>
            </div>




            <hr/>
            <div class="mapouter">  
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Kuzzo's%20Chicken%20and%20Waffles&t=&z=15&ie=UTF8&iwloc=&output=embed"frameborder="0" scrolling="no">
                    </iframe>
                    <a href="https://www.pureblack.de/google-maps/">pureblack.de</a></div>
            </div>
        </div>

        <div id="lockerRoom" class="tab-pane fade">
            <div class="header">
                <h1 class="title">Locker Room Lounge</h1>
                <h3><em>Enjoy a good time @ Locker Room</em></h3>
                <hr />
            </div>
            <hr/>
            <h3 class="lockerTitle">Our Hours</h3>
            <hr/>
            <table align ="center" class = "table">    
                <thead>
                    <tr>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Closed</td>
                        <td>5PM–12AM</td>
                        <td>5PM–12AM</td>
                        <td>5PM–12AM</td>
                        <td>5PM–12AM</td>
                        <td>Closed</td>
                        <td>12–2AM, 2PM–2AM</td>
                    </tr>
                </tbody>
            </table>
            <hr/>


            <div class = "row">
                <div class =  "col-md-4">
                    <h2 class = "title">Contact Us</h2>
                    <h3 style = "text-align: center;">313-864-1220</h3>
                    <br/>
                    <br/>
                    <h2 class = "title">Location</h2>
                    <h3 style = "text-align: center;">
                        18290 Livernois Ave., Detroit, MI 48221
                    </h3>

                </div>

                <div id="lockerCarousel" class="carousel slide col-md-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block   " src="locker.jpg" alt="First slide">
                        </div>
                    </div>
                </div>
                
                <div class = "col-md-4">
                    <h3 class = "title">About</h3>
                    <h4> This hole-in-the-wall bar features big sounds of funk, R&B and oldies played by a house band and visiting artists alike.<br/><br/> 
                    On other nights, the DJ will have everyone dancing.    
                    </h4>
                </div>

                      
            </div>
            <hr/>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Locker%20Room%20Lounge&t=&z=15&ie=UTF8&iwloc=&output=embed"frameborder="0" scrolling="no">
                    </iframe>
                    <a href="https://www.pureblack.de/google-maps/">pureblack.de</a>
                </div>
            </div>
        </div>
        
        <div id="felle" class="tab-pane fade">

            <br />
            <div class="header">
                <h1 class="title">Fel&apos;le Gallery</h1>
                <h3><em>Home of the nationally known artist Fel'le. This art gallery hosts paint parties, event gatherings and artist workshops
                for kids, adults and seniors.</em></h3>
                <hr />
                <hr/>
            </div>            

            <div class = "row">
                <div class =  "col-md-4">
                    <h2 class = "title">Contact</h2>
                    <h3 style = "text-align: center;">(313) 415-6308</h3>
                    <div style = "text-align: center;"><h3><a href = "https://www.facebook.com/TheFelleGallery/">Facebook</a></h3></div>
                    <div style = "text-align: center;"><h3><a href = "https://www.instagram.com/thefellegallery/?hl=en">Instagram</a></h3></div>
                    <br/>
                    <br/>
                    <h2 class = "title">Location</h2>
                    <h3 style = "text-align: center;">
                    19926 Livernois Ave., Detroit, MI 48221
                    </h3>
                </div>

                <div id="felleCarousel" class="carousel slide col-md-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="Felle4.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="Fell3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block" src="Felle1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block" src="Felle6.jpg" alt="First slide">
                        </div>                        
                    </div>
                </div>

                <div class = "col-md-4">
                    <h3 class = "title">About</h3>
                    <h4>Felle, a nationally renowned artist and Detroit native, began painting at the age of 14 and has since grown to have a long standing career of accomplishments.
                        <br/><br/>At the age of 21, he became an entrepreneur opening his first business, “Another Level Airbrushing and Nail Salon."  
                        <br/><br/>In 1995, he signed with a publishing company and began traveling the U.S. selling his art to both fans and art galleries across the country.
                        <br/><br/>Felle has painted stage backdrops for a vast array of celebrities including Tyler Perry, Beyonce, Jay-Z, R. Kelly, and Kanye West - to name a few.
                    </h4>
                </div>
            </div>

            <hr/>
            <div id = "upcomingEvents">
                <h3 class = "felleTitle" >Upcoming Events</h3>
                <h4 style = "text-align: center;" class="title">  December 14:  5 PM – 9 PM 
                    <br/> Artist Workshops For Kids And Adults</h4>
                <h5 style = "text-align: center;">
                    This event features an artist "Open House" for children and adults with three master artists ( David wilson, Master Ponch, and internationally known artist Fel'le).<br/> 
                    We will be registering for Jan 2019 Artist workshops on sight. Please bring art!!!<br/>
                    Courses include: Basic Drawing, water color, acrylic painting, oil painting, airbrushing and color theory! <br/><br/>
                    If you,a friend, or your child have the interest... THIS IS WHERE YOUR FUTURE BEGINS!
                </h5>
            </div>
        



            <hr/>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=19926%20Livernois%20Ave.%2C%20Detroit%2C%20MI%2048221&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no">
                    </iframe>
                    <a href="https://www.pureblack.de/google-maps/">pureblack.de</a>
                </div>
            </div>
        </div> -->
    </div>


    <hr/>
    <footer>
        <!-- <div id = "kuzzosFooter">
            <p> Current Location: Home/Restaurants/Kuzzo&apos;s Chicken and Waffles</p>
            <p>Made by Derrick Leeper</p>
            <p>For more information, please contact <a href = "mailto:Derrick.Leeper@gmail.com">Derrick Leeper</a></p>
            <br/>
            <br/>
        </div>
        <div id = "lockerFooter">
            <p> Current Location: Home/Bars/Locker Room Lounge</p>
            <p>Made by Derrick Leeper</p>
            <p>For more information, please contact <a href = "mailto:Derrick.Leeper@gmail.com">Derrick Leeper</a></p>
            <br/>
            <br/>
        </div>
        <div id = "felleFooter">
            <p> Current Location: Home/Entertainment/Fel&apos;le Gallery</p>
            <p>Made by Derrick Leeper</p>
            <p>For more information, please contact <a href = "mailto:Derrick.Leeper@gmail.com">Derrick Leeper</a></p>
            <br/>
            <br/>
        </div> -->
        <div id = "footerInfo">
            <p> Current Location: Home</p>
            <p>Made by Derrick Leeper</p>
            <p>For more information, please contact <a href = "mailto:Derrick.Leeper@gmail.com">Derrick Leeper</a></p>
            <br/>
            <br/>
        </div>           
    </footer>
</body>
</html>