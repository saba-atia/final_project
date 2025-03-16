@extends('welcome')
@section('title','contact')
@section('content')
<form class="registration-form">
    <!-- Title for the form -->
    <h2>Request a live demo of Smart Punch's HRMS</h2>

    <label for="firstName">First Name*</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="companyName">Company Name*</label>
    <input type="text" id="companyName" name="companyName" required>

    <label for="phoneNumber">Phone Number*</label>
    <div class="phone-input">
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
        <select id="countryCode" name="countryCode">
            <option value="+962">+962</option>
            <!-- Add more country codes here -->
        </select>
    </div>

    <label for="numEmployees">Number of Employees*</label>
    <input type="number" id="numEmployees" name="numEmployees" required>

    <label for="headquarters">Company Headquarters*</label>
    <input type="text" id="headquarters" name="headquarters" required>

    <div class="radio-group">
        <label>Would you like to choose a time slot for the demo now?*</label><br>
        <input type="radio" id="yes" name="demoTime" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="demoTime" value="no">
        <label for="no">No</label>
    </div>

    <label for="businessEmail">Business Email*</label>
    <input type="email" id="businessEmail" name="businessEmail" required>

    <label for="jobTitle">Job Title*</label>
    <input type="text" id="jobTitle" name="jobTitle" required>

    <input type="submit" value="Submit">
</form>
@endsection