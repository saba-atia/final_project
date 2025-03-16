@extends('welcome')
@section('title','FAQ')
@section('content')
<h1 class="faq-title">Frequently Asked Questions</h1>


<div class="faq-container">
  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> What is "Smart Punch"?
    </button>
    <div class="faq-answer">
      <p>"Smart Punch" is an integrated system for managing employee attendance and absence, with additional features such as replacing fingerprint scanning and managing leave and evaluations.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> How can I register attendance using "Smart Punch"?
    </button>
    <div class="faq-answer">
      <p>Employees can register their attendance via the app using geographic location.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> Can I edit employee data?
    </button>
    <div class="faq-answer">
      <p>Yes, administrators can edit employee data through the interactive dashboard of the system.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> How can I add leave for an employee?
    </button>
    <div class="faq-answer">
      <p>Leave can be easily added through the dashboard, with flexible options for specifying leave type and dates.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> Can I check attendance status in real-time?
    </button>
    <div class="faq-answer">
      <p>Yes, the system provides real-time reports of attendance and absence for all employees.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> Does the system support official holidays?
    </button>
    <div class="faq-answer">
      <p>Yes, the system supports official holidays and can be customized according to the company's needs.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> Does "Smart Punch" support multiple branches?
    </button>
    <div class="faq-answer">
      <p>Yes, the system can handle multiple branches and distribute reports accordingly.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> How can I access monthly reports?
    </button>
    <div class="faq-answer">
      <p>Monthly attendance and absence reports can be generated through the dashboard with the option to export to Excel or PDF files.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> Can I use "Smart Punch" on mobile?
    </button>
    <div class="faq-answer">
      <p>Yes, the system supports access via mobile apps for both employees and managers.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      <span class="plus">+</span> Can I add new employees to the system?
    </button>
    <div class="faq-answer">
      <p>Yes, new employees can be added easily through the user-friendly interface provided by the system.</p>
    </div>
  </div>
</div>














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