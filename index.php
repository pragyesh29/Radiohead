<html>
<head>
  <?php include "scripts.php"; ?>
  <link rel="stylesheet" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  <header id="home">
    <div class="container">
      <div class="hamburger-menu">
        <i class="fas fa-bars toggle"></i>
        <i class="fas fa-times toggle"></i>
      </div>
      <nav class="d-flex justify-content-center justify-content-lg-between align-items-center">
        <a class="navbar-brand" href="cart.php">
          <img src="./Images/radiohead-bear.png" class="img-fluid" alt="Radiohead">
        </a>
        <ul class="nav-list text-center p-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="SearchBands.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#albums">Be Member</a>
          </li>
        </ul>
      </nav>
      <div class="hero-text text-white w-100 px-2 px-sm-0">
        <h1 class="display-4">Welcome</h1>
        <p class="lead mb-4">Everything in its right Place!</p>
        <a class="btn px-5 mr-2" href="#">Explore</a>
        <a class="btn px-5" href="#albums">Albums</a>
      </div>
    </div>
  </header>
  <main>
    <section class="about" id="about">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-12 col-md-6 text-center text-md-left" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease">
            <div class="section-heading mb-3">
              <h4>Discover</h4>
              <h1 class="display-4">Our Story</h1>
            </div>
            <p>Thomas Edward Yorke (born 7 October 1968) is an English musician and the main vocalist and songwriter of the rock band Radiohead. A multi-instrumentalist, he mainly plays guitar and keyboards, and is known for his falsetto.
              Yorke was born in Northamptonshire. His family lived in Scotland before settling in Oxfordshire, England, where he formed Radiohead with his schoolmates. After he graduated from the University of Exeter, Radiohead signed to Parlophone; their early hit "Creep" made Yorke a celebrity, and Radiohead have gone on to achieve critical acclaim and sales of over 30 million albums. Yorke's early influences included alternative rock acts such as the Pixies and R.E.M.; Radiohead's fourth album, Kid A (2000), saw Yorke and the band move into electronic music, often manipulating his vocals.
            </p>
            <a class="btn mt-4 mb-5 mb-md-0" href="#">Find out more</a>
          </div>
          <div class="col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease">
            <!-- <img class="img-fluid" src="./Images/Radiohead.gif" alt=""> -->
            <img class="img-fluid" src="https://therevue.ca/wp-content/uploads/2020/09/radiohead-1.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="menu" id="menu">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease">
            <div class="shop-info">
              <i class="far fa-clock mb-3"></i>
              <h1 class="mb-4">Hours of Operation</h1>
              <p>Mon-Fri 8:00am - 6:00pm</p>
              <p>Sat-Sun 8:00am - 1:00pm</p>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4 mb-md-0 pt-4" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease">
            <div class="shop-info">
              <i class="fas fa-map-marked-alt mb-3"></i>
              <h1 class="mb-4">Location</h1>
              <address>
                1234 First Street <br>
                Lucknow City, Luck 226022
              </address>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4 mb-md-0 pt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease">
            <div class="shop-info">
              <i class="fas fa-mobile-alt mb-3"></i>
              <h1 class="mb-4">Get In Touch</h1>
              <p>Phone #: 6698-525-688</p>
              <p>Email: xyz@gmail.com</p>
            </div>
          </div>
        </div>
        <hr class="mt-5">
      </div>

      <div class="container-fluid p-0" id="albums">
        <div class="section-heading my-5 text-center">
          <h4 class="text-white">Music</h4>
          <h1 class="display-4">Discographies</h1>
        </div>
        <!-- ROW #1 -->
        <div class="row no-gutters">
          <!-- Column set #1 -->
          <div class="col-12 col-md-6 col-xl-2 order-sm-1 order-xl-1">
            <!-- <img class="img-fluid" src="./Images/OK Computer.jpg" alt=""> -->
            <img class="img-fluid" src="https://img.discogs.com/yIM4lSU_7uAcYRUP_paNthymO30=/fit-in/600x593/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1399301-1404414270-1807.jpeg.jpg" alt="">
          </div>
          <div class="col-12 col-md-6 col-xl-2 order-sm-2 order-xl-2 point-left">
            <div class="menu-item-desc">
              <h1>OK Computer</h1>
              <p>This is one of great album.</p>
              <a class="btn mt-3 d-none d-xl-block">Learn more</a>
            </div>
          </div>
          <!-- Column set #2 -->
          <div class="col-12 col-md-6 col-xl-2 order-sm-4 order-xl-3">
            <!-- <img class="img-fluid" src="./Images/Kid A.jpg" alt=""> -->
            <img class="img-fluid" src="https://hips.hearstapps.com/esq.h-cdn.co/assets/15/24/1433876510-81p-o2cddll-sl1437-.jpg" alt="">
          </div>
          <div class="col-12 col-md-6 col-xl-2 order-sm-3 order-xl-4 point-left">
            <div class="menu-item-desc">
              <h1>Kid A</h1>
              <p>This one is again one of the great album.</p>
              <a class="btn mt-3 d-none d-xl-block">Learn more</a>
            </div>
          </div>
          <!-- Column set #3 -->
          <div class="col-12 col-md-6 col-xl-2 order-sm-5 order-xl-5">
            <!-- <img class="img-fluid" src="./Images/httt.jpg" alt=""> -->
            <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/A1y8IvOibwL._SY355_.jpg" alt="">
          </div>
          <div class="col-12 col-md-6 col-xl-2 order-sm-6 order-xl-6 point-left">
            <div class="menu-item-desc">
              <h1>Hail To The Thief</h1>
              <p>And again one of the great album.</p>
              <a class="btn mt-3 d-none d-xl-block">Learn more</a>
            </div>
          </div>
        </div>

        <!-- ROW #2 -->
        <div class="row no-gutters">
          <!-- Column set #4 -->
          <div class="col-12 col-md-6 col-xl-2 order-sm-2 order-xl-2">
            <!-- <img class="img-fluid" src="./Images/Amnesiac.jpg" alt=""> -->
            <img class="img-fluid" src="https://img.discogs.com/x57SM_XVsXVDhA6bd8rvI6hWqNo=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-173980-1385277715-2569.jpeg.jpg" alt="">
          </div>
          <div class="col-12 col-md-6 col-xl-2 order-sm-1 order-xl-1 point-right">
            <div class="menu-item-desc">
              <h1>Amnesiac</h1>
              <p>This is one of great album.</p>
              <a class="btn mt-3 d-none d-xl-block">Learn more</a>
            </div>
          </div>
          <!-- Column set #5 -->
          <div class="col-12 col-md-6 col-xl-2 order-sm-3 order-xl-4">
            <!-- <img class="img-fluid" src="./Images/The Bends.jpg" alt=""> -->
            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/5/55/Radioheadthebends.png" alt="">
          </div>
          <div class="col-12 col-md-6 col-xl-2 order-sm-5 order-xl-3 point-right">
            <div class="menu-item-desc">
              <h1>The Bends</h1>
              <p>This one is again one of the great album.</p>
              <a class="btn mt-3 d-none d-xl-block">Learn more</a>
            </div>
          </div>
          <!-- Column set #6 -->
          <div class="col-12 col-md-6 col-xl-2 order-sm-6 order-xl-6">
            <!-- <img class="img-fluid" src="./Images/King Of Limbs.jpg" alt=""> -->
            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/a/a2/Radioheadthekingoflimbs.png" alt="">
          </div>
          <div class="col-12 col-md-6 col-xl-2 order-sm-5 order-xl-5 point-right">
            <div class="menu-item-desc">
              <h1>The King Of Limbs</h1>
              <p>And again one of the great album.</p>
              <a class="btn mt-3 d-none d-xl-block">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="chef" id="chef">
      <div class="container">
        <div class="section-heading my-5 text-center">
          <!-- <h4>Meet</h4> -->
          <h1 class="display-4">Our Members</h1>
        </div>
        <div class="row text-center">
          <div class="col-12 col-md-4" data-aos-duration="1000" data-aos-easing="ease" data-aos="fade-right">
            <!-- <img class="img-fluid" src="./Images/normal_Thom_Yorke.png" alt=""> -->
            <img class="img-fluid" src="https://i.redd.it/e6s1ns3x0df21.jpg" alt="">
            <div class="card-body">
              <h1>Thom Yorke</h1>
              <h6>Lead Vocalist</h6>
              <p>Thom Yorke is one of the greatest musician alive.
                <!-- Thomas Edward Yorke (born 7 October 1968) is an English musician and the main vocalist and songwriter of the rock band Radiohead. A multi-instrumentalist, he mainly plays guitar and keyboards, and is known for his falsetto.
                Yorke was born in Northamptonshire. His family lived in Scotland before settling in Oxfordshire, England, where he formed Radiohead with his schoolmates. After he graduated from the University of Exeter, Radiohead signed to Parlophone; their early hit "Creep" made Yorke a celebrity, and Radiohead have gone on to achieve critical acclaim and sales of over 30 million albums. Yorke's early influences included alternative rock acts such as the Pixies and R.E.M.; Radiohead's fourth album, Kid A (2000), saw Yorke and the band move into electronic music, often manipulating his vocals.
                Yorke's solo work comprises mainly electronic music. His debut solo album, The Eraser, was released in 2006. To perform it live, in 2009 he formed a new band, Atoms for Peace, with musicians including Red Hot Chili Peppers bassist Flea and Radiohead producer Nigel Godrich; they released an album, Amok, in 2013. Yorke's second solo album, Tomorrow's Modern Boxes, was released in 2014, followed by Anima in 2019. He has collaborated with artists including PJ Harvey, Björk, Flying Lotus, and Modeselektor, and has composed for film and theatre; his first feature film soundtrack, Suspiria, was released in October 2018. With artist Stanley Donwood, Yorke creates artwork for Radiohead albums. He often incorporates "erratic" dancing into his performances.
                Yorke is an activist on behalf of human rights, animal rights, environmental and anti-war causes, and his lyrics incorporate political themes. He has been critical of the music industry, particularly of major labels and streaming services such as Spotify. With Radiohead and his solo work he has pioneered alternative music release platforms such as pay-what-you-want and BitTorrent. Along with the other members of Radiohead, he was inducted into the Rock and Roll Hall of Fame in 2019. -->
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" data-aos-duration="1000" data-aos-easing="ease" data-aos="fade-up">
            <!-- <img class="img-fluid" src="./Images/radio1_johnny01.jpg" alt=""> -->
            <img class="img-fluid" src="https://external-preview.redd.it/OlVWgEHrMwhfPMjlPwb9fxwHfLWUBRIReAWibLh5j44.jpg?auto=webp&s=e5e24b38986c8beaafb5cb2a37e63c6e11be141f" alt="">
            <div class="card-body">
              <h1>Jonny GreenWood</h1>
              <h6>Multi instrumentalist</h6>
              <p>He is too one of the greatest musician alive.
                <!-- Jonathan Richard Guy Greenwood (born 5 November 1971) is an English musician and composer. He is the lead guitarist and keyboardist of the alternative rock band Radiohead, and has written a number of film scores.
                Along with his elder brother, Radiohead bassist Colin, Greenwood attended Abingdon School in Abingdon near Oxford, England, where he met the future band members. The youngest of the group, Greenwood was the last to join, first playing keyboards and harmonica but soon becoming lead guitarist. He abandoned a degree in music when the band signed to Parlophone; their debut single "Creep" was distinguished by Greenwood's aggressive guitar work. Radiohead have since achieved critical acclaim and sold over 30 million albums. Along with the other members of Radiohead, Greenwood was inducted into the Rock and Roll Hall of Fame in 2019.
                Greenwood has been named one of the greatest guitarists of all time by publications including Rolling Stone. A multi-instrumentalist, Greenwood has also played instruments including bass guitar, piano, viola, and drums. He is a prominent player of the ondes Martenot, an early electronic instrument. He uses electronic techniques such as programming, sampling and looping, and writes music software used by Radiohead. He described his role in the band as an arranger, helping to transform Thom Yorke's demos into finished songs.
                Radiohead albums feature Greenwood's string and brass arrangements, and he has composed for orchestras including the London Contemporary Orchestra and the BBC Concert Orchestra. His first solo work, the soundtrack for the film Bodysong, was released in 2003. In 2007, he scored There Will Be Blood, directed by Paul Thomas Anderson,[A] and has composed the soundtrack for every Anderson film since; in 2018, he was nominated for an Academy Award for his score for Anderson's Phantom Thread. Greenwood's other scores include two collaborations with director Lynne Ramsay. He has collaborated several times with the Israeli composer Shye Ben Tzur, including on the 2015 album Junun. -->
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" data-aos-duration="1000" data-aos-easing="ease" data-aos="fade-left">
            <!-- <img class="img-fluid" src="./Images/Colin+Greenwood+colin.jpg" alt=""> -->
            <img class="img-fluid" src="http://sun9-62.userapi.com/c841332/v841332357/24b3f/oj5I8zjdP40.jpg" alt="">
            <div class="card-body">
              <h1>Colin Charles Greenwood</h1>
              <h6>Bassist</h6>
              <p>He is phenomial bassist
                <!-- Colin Charles Greenwood (born 26 June 1969) is an English musician and the bassist for the alternative rock band Radiohead. Along with his younger brother, Radiohead guitarist Jonny Greenwood, Greenwood attended Abingdon School in Oxford, England, where he met the future band members. Radiohead have since achieved critical acclaim and have sold over 30 million albums. Along with bass guitar, Greenwood plays upright bass and electronic instruments.
                Greenwood, whose father served in the British army, lived in Germany as a child for enough time to become fluent in German. He is the older brother of Radiohead guitarist Jonny Greenwood. The family historically had ties to the British Communist Party and the Fabian Society. Greenwood credited his older sister, Susan, with influencing his and his brother Jonny's taste in music as an adolescent: "She’s responsible for our precocious love of miserable music. The Fall, Magazine, Joy Division. We were ostracised at school because everyone else was into Iron Maiden."
                According to Greenwood, he began playing bass out of necessity, teaching himself by playing along to New Order, Joy Division and Otis Redding. Among his musical influences are Booker T and the MGs, Bill Withers and Curtis Mayfield. He said: "We were people who picked up their respective instruments because we wanted to play music together, rather than just because we wanted to play that particular instrument. So it was more of a collective angle, and if you could contribute by having someone else play your instrument, then that was really cool. I don’t think of myself as a bass player anyway. I’m just in a band with other people." -->
              </p>
            </div>
          </div>
          <!-- <div class="col-12 col-md-4">
            <img class="img-fluid" src="./Images/thomy.jpg" alt="">
            <div class="card-body">
              <h1>Thom Yorke</h1>
              <h6>Lead Vocalist</h6>
              <p>Thom Yorke is one of the greatest musician alive.</p>
            </div>
          </div> -->
          <!-- <div class="col-12 col-md-4">
            <img class="img-fluid" src="./Images/thomy.jpg" alt="">
            <div class="card-body">
              <h1>Thom Yorke</h1>
              <h6>Lead Vocalist</h6>
              <p>Thom Yorke is one of the greatest musician alive.</p>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <footer class="text-center py-5">
      &copy; Radiohead 2020
    </footer>
  </main>
</body>
</html>
