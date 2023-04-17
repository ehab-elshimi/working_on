@include('basic.includes.head') <!--404 and signup and login and reset-->
{{-- @include('basic.includes.aside') --}}
{{-- @include('basic.includes.sidebar') --}}
{{-- @include('basic.includes.header') --}}
{{-- @include('dashboard.includes.header2') --}}
<!-- Main Container -->
<main id="main-container"><!--404 and signup and login and reset-->
    {{-- @include('basic.includes.navigation') --}}
    <!-- Page Content -->
    @yield('content')<!--404 and signup and login and reset-->
    <!-- END Page Content -->
</main><!--404 and signup and login and reset-->
<!-- END Main Container -->
{{-- @include('basic.includes.footer')<!----> --}}
{{-- @include('dashboard.includes.apps_modal') --}}
@include('basic.includes.scripts')<!--404 and signup and login and reset-->
