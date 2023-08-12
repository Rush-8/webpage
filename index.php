<!DOCTYPE html>
  <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nature and the Great Outdoors</title>
  <link rel="stylesheet" href="web.css">
</head>
<body>
  <header>
    <a href="#home" class="logo" >NGO</a>
    <div class="menu" id="menu-icons">
      <ul class="navbar" id="myNavbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#explore">Explore</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      </div>
  </header>

    <section class="home" id="home">
      <div class="home-text">
      <h1>Embrace the Wonders of Nature</h1>
      <h4>"Nature is not a place to visit, it is home."<br>-Gary Snyder-</h4>
    </div>

    <div class="home-img">
      <img src="n18.jpg">
      </div>
    </section>

    <section class="about" id="about">
      <div class="about-img">
        <img src="n14.jpg">
      </div>
      <div>
        <span>About Us</span>
        <h2>Do you love spending time in nature? </h2>
        <p>Here, we invite you to immerse yourself in the beauty and serenity of nature's embrace. Through captivating imagery, inspiring stories, and useful resources, we aim to ignite your passion for the natural world. Whether you seek adventure, tranquility, or a deeper understanding of our environment, this page is a gateway to explore, appreciate, and protect the remarkable treasures that nature offers. Join us on this journey as we embrace the awe-inspiring power and boundless wonders of nature.</p>
      </div>
    </section>
 
   <section class="projects" id="projects">
       <div class="projects-img">
         <img src="n23.jpg">
       </div>
       <div>
      <span style="margin-left: -700px;" >Projects</span>
       <h2 style="margin-left: -700px;">Get Inspired</h2>
       <p style="margin-left: -700px;">This showcases a collection of our noteworthy works and achievements related to nature and the great outdoors. Each project represents our commitment to capturing the beauty of the natural world and promoting environmental conservation through various creative endeavors.
       </p>
     </div>

     <div class="menu-container">
      <div class="box">
        <div class="box-img">
          <img src="n10.jpeg" >
        </div>
        <h2>Hiking</h2>
        <h4>Hiking to Ella Rock offers an exhilarating adventure through lush tea plantations and rugged landscapes, rewarded with stunning panoramic views at the summit. It's a journey that combines physical challenge, natural beauty, and unforgettable vistas for an experience that will leave you in awe.</h4>
      </div>

      <div class="box">
        <div class="box-img">
          <img src="n11.jpg">
        </div>
        <h2>Diving</h2>
        <h4>Diving into the depths of Unawatuna Beach unveils a vibrant underwater paradise, where vibrant coral reefs and diverse marine life captivate the senses. Immerse yourself in this enchanting world, where every descent reveals a treasure trove of beauty and wonder.</h4>
      </div>

      <div class="box">
        <div class="box-img">
          <img src="n12.jpg">
        </div>
        <h2>Camping</h2>
        <h4> Camping in Belihuloya site immerses you in the tranquility of nature, surrounded by lush greenery and the soothing sounds of the river. It's a serene escape where you can unwind, connect with the outdoors, and create cherished memories under the starlit sky.</h4>
      </div>
    </div>
   </section>

   <section class="explore" id="explore">
      <div class="explore-img">
        <img src="n22.jpg">
      </div>
      <div>
        <span>Exoplore</span>
        <h2>Let's Explore</h2>
        <p>It is your gateway to breathtaking destinations and hidden gems waiting to be discovered in the great outdoors. We curate guides and resources that will inspire you to embark on your own adventures and explore the wonders of nature.</p>
       </div>
   </section>

   <section class="cta">
      <h1>GO OUT THERE'S LIFE OUTSIDE</h1>

  <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="n24.jpg" style="width:100%">
    <div class="text">Water Crafting</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="n25.jpg" style="width:100%">
    <div class="text">Camping</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="n26.jpg" style="width:100%">
    <div class="text">Canyoning</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="n27.jpg" style="width:100%">
    <div class="text">Hiking</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="n28.jpeg" style="width:100%">
    <div class="text">Diving</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

  <a href="#container" class="btn">Let's Enjoy</a>
  </section>

  <section class="contact" id="contact">
  <div class="container">
  <h2 style="font-size: 40px;" "color: var(--text-color);" "position: absolute;">Contact Us</h2>
    <form action="val.php" method="post">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="8" columns="10" required></textarea>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</section>

    <section class="container forms" id="container">
      <div class="form login">
      <div class="form-content">
      <header>Login</header>
      <form action="login.php" method="post">
      <div class="field input-field">
      <input type="email" placeholder="Email" class="input">
      </div>
      <div class="field input-field">
      <input type="password" placeholder="Password" class="password">
      <i class='bx bx-hide eye-icon'></i>
      </div>
      <div class="form-link">
      <a href="#" class="forgot-pass">Forgot password?</a>
      </div>
      <div class="field button-field">
      <button>Login</button>
      </div>
      </form>
      <div class="form-link">
      <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
      </div>
      </div>
      <div class="line"></div>
      <div class="media-options">
      <a href="#" class="field facebook">
      <img src="flogo.jpg" alt="f" class="facebook-img"></i>
      <span>Login with Facebook</span>
      </a>
      </div>
      <div class="media-options">
      <a href="#" class="field google">
      <img src="glogo.png" alt="g" class="google-img">
      <span>Login with Google</span>
      </a>
      </div>
      </div>
      <div class="form signup">
      <div class="form-content">
      <header>Signup</header>
      <form action="#">
      <div class="field input-field">
      <input type="email" placeholder="Email" class="input">
      </div>
      <div class="field input-field">
      <input type="password" placeholder="Create password" class="password">
      </div>
      <div class="field input-field">
      <input type="password" placeholder="Confirm password" class="password">
      <i class='bx bx-hide eye-icon'></i>
      </div>
      <div class="field button-field">
      <button>Signup</button>
      </div>
      </form>
      <div class="form-link">
      <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
      </div>
      </div>
      <div class="line"></div>
      <div class="media-options">
      <a href="#" class="field facebook">
      <i class='bx bxl-facebook facebook-icon'></i>
      <span>Login with Facebook</span>
      </a>
      </div>
      <div class="media-options">
      <a href="#" class="field google">
      <img src="#" alt="" class="google-img">
      <span>Login with Google</span>
      </a>
      </div>
      </div>
      </section>

    
  
    <div class="footer">
    <div class="social-icons">
      <h4>Contact Us</h4>
      <a href="#"><img src="facebook.jpeg" alt="Facebook" width="20" height="20"></a>
      <a href="#"><img src="instagram.jpg" alt="Instagram" width="20" height="20"></a>
      <a href="#"><img src="twitter.jpg" alt="Twitter" width="20" height="20"></a>
    </div>
    </div>
    <div class="contact-info">
      <p>Email: ngo@info.com</p>
      <p>Phone: +94 112578964</p>
    </div>
 
  
  <script src="web.js"></script>


</body></html>