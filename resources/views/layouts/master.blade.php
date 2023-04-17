@include('dashboard.includes.head')
@include('dashboard.includes.aside')
@include('dashboard.includes.sidebar')
@include('dashboard.includes.header')
{{-- @include('dashboard.includes.header2') --}}
<!-- Main Container -->
<main id="main-container">
    @include('dashboard.includes.navigation')
    <!-- Page Content -->
    @yield('content')
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
@include('dashboard.includes.footer')
{{-- @include('dashboard.includes.apps_modal') --}}
@include('dashboard.includes.scripts')
