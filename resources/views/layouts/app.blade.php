<!DOCTYPE html>
<html lang="en">

<!-- Header Import -->
@include('partials.header')
<!--  Header Import -->

<body class="crm_body_bg">



    
    <!-- import Navbar  File -->
    @include('partials.sidebar')
    <!-- import Navbar  File -->
    <section class="main_content dashboard_part large_header_bg">
    <!-- import Navbar  File -->
    @include('partials.navbar')
    <!-- import Navbar  File -->



    <!-- Main Content -->
    @yield('content')

    </section>
    <!-- Import Footer File -->
    @include('partials.footer')
    <!-- Import Footer File -->


    <!-- Import Libray File -->
    @include('partials.library')
    <!-- Import Libray File -->
</body>

</html>