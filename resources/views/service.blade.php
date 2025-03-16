@extends('welcome')
@section('title','service')
@section('content')
<section class="section-one">
    <img src="./assets/img/IMG/service1.png" class="img1">

    <div class="attendance-management">
        <h2>Attendance Management</h2>
        <ul>
          <li><span class="check-icon">&#10003;</span> <label>View employee attendance logs</label></li>
          <li><span class="check-icon">&#10003;</span> <label>Register attendance using various methods ( mobile, or desktop)</label></li>
          <li><span class="check-icon">&#10003;</span> <label>Calculate working hours for each employee</label></li>
          <li><span class="check-icon">&#10003;</span> <label>Track late arrivals and early departures</label></li>
        </ul>
      </div>
</section>



<section class="section-two">
    <div class="leave-management">
        <h2>Leave Management</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>Submit leave requests (sick leave, annual leave, emergency leave)</label></li>
            <li><span class="check-icon">&#10003;</span> <label>View the status of requests (approved or rejected)</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Track remaining leave days</label></li>
        </ul>
    </div>
    <img src="./assets/img/IMG/service2.png" class="img2">
</section>


<section class="section-three">
    <img src="./assets/img/IMG/service3.png" class="img3">

    <div class="absences-management">
        <h2>Absences</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>Monitor unauthorized absences</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Manage absence due to emergencies or illness</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Alerts for extended absences</label></li>
        </ul>
    </div>
</section>


<section class="section-four">
    <div class="performance-management">
        <h2>Performance Evaluations</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>View results of periodic employee evaluations</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Allow managers to add performance reviews</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Rank employees based on their performance (Good, Average, Poor)</label></li>
        </ul>
 
   </div>

   <img src="./assets/img/IMG/service4.png" class="img4">

</section>


<section class="section-five">
    <img src="./assets/img/IMG/service5.png" class="img5">

    <div class="reports-management">
        <h2>Reports</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>Provide regular reports on attendance, leave, absences, evaluations</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Export reports to PDF or Excel</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Display graphical analysis of attendance and performance</label></li>
        </ul>
    </div>
</section>



<section class="section-six">
    <div class="payroll-management">
        <h2>Payroll Management</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>Track salaries and bonuses</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Calculate employee entitlements based on attendance and leave</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Detailed deductions and allowances for each employee</label></li>
        </ul>
    </div>
    <img src="./assets/img/IMG/service6.png" class="img6">
</section>


<section class="section-seven">
    <img src="./assets/img/IMG/service7.png" class="img7">

    <div class="notifications-management">
        <h2>Notifications</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>Alerts for new updates (such as evaluations or leave requests)</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Reminders for absences or late arrivals</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Notifications regarding leave requests or attendance</label></li>
        </ul>
    </div>
</section>




<section class="section-eight">
    <div class="dashboard-management">
        <h2>Dashboard</h2>
        <ul>
            <li><span class="check-icon">&#10003;</span> <label>Display a comprehensive summary of attendance, leave, evaluations, etc.</label></li>
            <li><span class="check-icon">&#10003;</span> <label>Use charts or graphs for quick data visualization of employee status</label></li>
        </ul>
    </div>
    <img src="./assets/img/IMG/service8.png" class="img8">
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