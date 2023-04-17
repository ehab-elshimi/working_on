</div>
<!-- END Page Container -->

@if(Route::current()->getName() == 'signup')
    @include('basic.pages.completes.complete_signup_1') <!--signup -->
@endif

{{-- Start Script --}}

{{-- main scripts --}}
<script src="{{ asset('dashboard/assets/js/oneui.core.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/oneui.app.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
{{-- main scripts --}}


{{--  Signup Route --}}
@if(Route::current()->getName() == 'dashboard.auth.signup')
    <script src="assets/js/pages/op_auth_signup.min.js"></script>
@endif
{{-- End Signup Route --}}

{{-- Login Route --}}
@if(Route::current()->getName() == 'dashboard.auth.login')
    <script src="{{ asset('dashboard/assets/js/pages/op_auth_signin.min.js') }}"></script>
@endif
{{-- End Login Route --}}

{{--  Reset Password Route --}}
@if(Route::current()->getName() == 'dashboard.auth.reset')
    <script src="{{ asset('dashboard/assets/js/pages/op_auth_reminder.min.js') }}"></script>
@endif
{{-- End Reset Password Route --}}




</body>
</html>
