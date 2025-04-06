<!DOCTYPE html>
<html lang="en">

@include('layouts.top')

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    @include('layouts.nav')
  </header>

  <main class="main">

    <!-- Hero Section -->
 
@yield('content')

   

    <!-- Contact Section -->
    @include('layouts.contactsection')
        <!-- Contact Section -->
      @include('layouts.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
@include('layouts.bottom')

</body>

</html>