<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boncan Dental Clinic</title>
  <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
  <!-- Navigation -->
  <nav>
    <div class="nav-container">
      <a href="#" class="logo">
        <div class="logo-icon">
          <img src="assets/img/logo.png" alt="Dental Logo">
          
        </div>
        <div class="logo-text">
          <div class="logo-title">Ricarda B. Boncan</div>
          <div class="logo-subtitle">Dental Clinic</div>
        </div>
      </a>


      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#services">Services</a></li>
      </ul>


      <div class="nav-buttons">
        <a href="auth/register.php" class="btn btn-ghost">Register</a>
        <a href="auth/login.php" class="btn btn-primary">Login</a>
      </div>
    </div>
  </nav>

   <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-bg">
      <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
      <h1 class="font-serif">
        Precision,<br>
        <span class="italic">Care,</span><br>
        <span class="large">CONFIDENCE</span>
      </h1>
      <p>
        With years of trusted experience, Dr. Ricarda Boncan and our team are committed to delivering healthy, confident smiles through professional and compassionate care
      </p>
      <div class="hero-buttons">
        <a href="#appointment" class="btn btn-primary btn-lg">Book an Appointment</a>
        <a href="#faq" class="btn btn-outline btn-lg">FAQS</a>
      </div>
    </div>
  </section>


  <!-- About Us Section -->
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-left">
        <div class="about-logo">
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
          <div class="circle circle3"></div>
        </div>
        <h2>About Us</h2>
        <div class="line"></div>
        <p>
          At Boncan Dental Clinic, we are dedicated to providing high-quality dental care in a comfortable and friendly environment. 
          Our goal is to help patients achieve healthy, beautiful smiles through advanced techniques and personalized care.
        </p>
      </div>
      <div class="about-right">
        <div class="image-frame">
          <img src="assets/img/doctor.png" alt="Dentist">
        </div>
      </div>
    </div>
  </section>





  <!-- Our Services Section -->
<section class="services" id="services">
  <div class="services-header">
    <h2>Our Services</h2>
    <div class="line"></div>
  </div>

  <div class="services-grid">
    <div class="service-card">
      <div class="img-box">
        <div class="accent"></div>
        <div class="photo" style="background-image: url('images/tmd.jpg');"></div>
      </div>
      <p>TMD Consult<br>Jaw (panga)</p>
    </div>

    <div class="service-card">
      <div class="img-box">
        <div class="accent"></div>
        <div class="photo" style="background-image: url('images/cleaning.jpg');"></div>
      </div>
      <p>Oral Prophylaxis<br>(Cleaning)</p>
    </div>

    <div class="service-card">
      <div class="img-box">
        <div class="accent"></div>
        <div class="photo" style="background-image: url('images/filling.jpg');"></div>
      </div>
      <p>Filling<br>(Pasta)</p>
    </div>

    <div class="service-card">
      <div class="img-box">
        <div class="accent"></div>
        <div class="photo" style="background-image: url('images/extraction.jpg');"></div>
      </div>
      <p>Extraction<br>(Bunot)</p>
    </div>

    <div class="service-card">
      <div class="img-box">
        <div class="accent"></div>
        <div class="photo" style="background-image: url('images/denture.jpg');"></div>
      </div>
      <p>Denture<br>(Pustiso)</p>
    </div>

    <div class="service-card">
      <div class="img-box">
        <div class="accent"></div>
        <div class="photo" style="background-image: url('images/consultation.jpg');"></div>
      </div>
      <p>Regular<br>Consultation</p>
    </div>
  </div>
</section>

  <!-- CONTACT US SECTION -->
<section class="contact-section" id="contact">
  <div class="contact-header">
    <div class="circles">
      <div class="circle big"></div>
      <div class="circle small"></div>
      <div class="circle mid"></div>
    </div>
    <h2>CONTACT US</h2>
  </div>

  <div class="contact-content">
    <div class="left-info">
      <p><i class="fa-solid fa-location-dot"></i> St. Lukes Medical Center</p>
      <p><i class="fa-solid fa-envelope"></i> dboncan@gmail.com</p>
      <p><i class="fa-solid fa-phone"></i> Phone: 632-87231071<br>Mobile: 63-998-9593889</p>
    </div>

    <div class="right-info">
      <h3>CLINIC HOURS</h3>
      <p><i class="fa-solid fa-clock"></i> Monday - Friday 9:00 am - 5:00 pm</p>
      <p class="follow">Follow us:</p>
      <p><i class="fa-brands fa-facebook"></i> RicardoBoncanMedicalClinic</p>
      <p><i class="fa-brands fa-instagram"></i> @RicardoBoncan_MedicalClinic</p>
    </div>
  </div>

  <div class="clinic-logo">
    <img src="images/logo.png" alt="Clinic Logo">
    <p>Ricardo B. Boncan<br><span>DENTAL CLINIC</span></p>
  </div>
</section>


<!-- FAQ SECTION -->
<section class="faq-section" id="faq">
  <div class="faq-header">
    <h2>FREQUENTLY ASKED QUESTIONS</h2>
    <div class="underline"></div>
  </div>

  <div class="faq-container">
    <div class="faq-item">
      <h3>How do I book an appointment?</h3>
      <p>You can book an appointment online by clicking the “Book Appointment” button on the homepage or by calling our clinic directly.</p>
    </div>

    <div class="faq-item">
      <h3>What services do you offer?</h3>
      <p>We offer preventive, restorative, cosmetic, and pediatric dental care — ensuring every smile is cared for.</p>
    </div>

    <div class="faq-item">
      <h3>Do you accept walk-in patients?</h3>
      <p>Yes, but we recommend scheduling an appointment to guarantee your preferred time slot.</p>
    </div>
  </div>
</section>





 
</body>
</html>