@extends('welcome')
@section('title','SMART PUNCH')
@section('content')
<section id="hero" class="hero section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <h1>SMART PUNCH</h1>
          <p>A comprehensive HR system to manage attendance, leave, evaluations, and more, with advanced features and an interactive dashboard</p>
          <div class="d-flex">
            <a href="./contact.html" class="btn-get-started">Request a Demo</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" >
        </div>
      </div>
    </div>

  </section>

  <section id="featured-services" class="featured-services section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="fa-solid fa-clock"></i>
            </div>
            <h4><a href="" class="stretched-link">Smart Attendance Management</a></h4>
            <p>Track employee attendance in real-time without the need for fingerprint systems, with accurate reports and analytics.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="fa-solid fa-calendar-check"></i>
            </div>
            <h4><a href="" class="stretched-link">Seamless Leave & Approvals</a></h4>
            <p>Submit and approve leave requests effortlessly, with an intelligent system to track remaining balances.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="fa-solid fa-chart-line"></i>
            </div>
            <h4><a href="" class="stretched-link">Advanced Reports & Insights</a></h4>
            <p>Gain clear insights into employee performance, attendance records, and productivity through an interactive dashboard.

            </p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section>

  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Who We Are<br></span>
      <h2>About Smart Punch</h2>
    </div><!-- End Section Title -->
  
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/IMG/aboutbage.png" class="img-fluid" alt="Smart Punch Overview">
        </div>
  
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3>More Than Just a Time-Tracking System</h3>
          <p>
            Smart Punch is a <strong>comprehensive and intelligent</strong> solution for managing employee <strong>attendance, leaves, and performance</strong>.  
            Designed with <strong>efficiency and simplicity</strong> in mind, our system enables organizations to effortlessly <strong>track attendance, generate insightful reports,</strong> and make <strong>data-driven decisions</strong> with ease.
          </p>
  
          <h3>Why Choose Smart Punch?</h3>
          <ul>
            <li><i class="bi bi-check-circle"></i> <strong>Automate tedious tasks</strong> and minimize manual errors.</li>
            <li><i class="bi bi-bar-chart"></i> <strong>Gain valuable insights</strong> through smart analytics and reports.</li>
            <li><i class="bi bi-people"></i> <strong>Seamless adaptability</strong> for small teams and large enterprises alike.</li>
          </ul>
  
          <p>
            With Smart Punch, you’re not just using a system—you’re transforming your workflow, <strong>boosting productivity, and optimizing workforce management</strong>.  
            No matter the size of your team, our solution <strong>adapts to your needs and grows with you.</strong>
          </p>
        </div>
      </div>
    </div>
  
  </section>

  <section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Services</span>
      <h2>Services</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">   

           
<img src="./assets/img/IMG/freepik__upload__73684-removebg-preview.png" width="150px"> <br> <br> <br> <br>
            
              <h3>Increase Productivity</h3>
            </a>
            <p>By automating repetitive tasks, you free up more time for what really matters. Get more done in less time!</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
<img src="./assets/img/IMG/section2.4.png" width="150px" > <br> <br> <br> <br>
              <h3>Enhance Collaboration</h3>
            </a>
            <p>Our platform provides real-time collaboration tools, making teamwork smoother and more effective than ever before.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
<img src="./assets/img/IMG/section3.4.png" width="170px"> <br> <br> <br> <br> <br> 
              <h3>Data-Driven Decisions</h3>
            </a>
            <p>Make smarter decisions by analyzing data instantly, giving you insights to drive your business forward.</p>
          </div>
        </div><!-- End Service Item -->

        

      </div>

    </div>

  </section>

  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Looking to take your HR employees to a state of Smart Punch ?</h3>
           <a href="./contact.html"> <button type="button" class="btn-action"> Request a Demo</button></a>
          </div>
        </div>
      </div>
    </div>

  </section>

  @endsection