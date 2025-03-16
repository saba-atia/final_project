@extends('welcome')
@section('title','login')
@section('content')
<div class="login-container">
    <div class="login">
        <div class="lc">
            <img src="assets/img/IMG/logo.png" alt="Smart Punch Logo" class="logo-login">
        </div>
        <h2>Login to Smart Punch</h2>
        <form action="login-action.html" method="POST">
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <button type="submit" class="btn-submit">Login</button>
        </form>
    </div>
</div>
@endsection