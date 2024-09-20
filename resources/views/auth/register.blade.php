<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('assets/') }}"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    {{--    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css"
          integrity="sha512-IXuoq1aFd2wXs4NqGskwX2Vb+I8UJ+tGJEu/Dc0zwLNKeQ7CW3Sr6v0yU3z5OQWe3eScVIkER4J9L7byrgR/fA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}"/>
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}"/>
    {!! RecaptchaV3::initJs() !!}
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}"/>
    <style>
        /* .grecaptcha-badge {
             visibility: hidden !important;
         }*/
    </style>
</head>

<body>
<!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                <img
                    src="{{asset('assets/img/illustrations/auth-register-illustration-light.png')}}"
                    alt="auth-register-cover"
                    class="img-fluid my-5 auth-illustration"/>

                <img
                    src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}"
                    alt="auth-register-cover"
                    class="platform-bg"
                />
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <!-- /Logo -->
                <h3 class="mb-1 fw-bold">Register</h3>
                <p class="mb-4">Make your app management easy and fun!</p>

                <form id="register_form" class="mb-3" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="name"
                            placeholder="Enter your username"
                            autofocus
                        />
                        <span class="text-danger error" id="name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"/>
                        <span class="text-danger error" id="email_error"></span>

                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                            />

                            {{--                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>--}}
                        </div>
                        <span class="text-danger error" id="password_error"></span>

                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Confirm Password</label>
                        <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="confirm-password"
                                class="form-control"
                                name="password_confirmation"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                            />

                            {{--                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>--}}
                        </div>
                        <span class="text-danger error" id="password_confirmation_error"></span>

                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms"/>
                            <label class="form-check-label" for="terms-conditions">
                                I agree to
                                <a href="javascript:void(0);">privacy policy & terms</a>
                            </label>
                        </div>
                        <span class="text-danger error" id="terms_error"></span>

                    </div>

                    {!! RecaptchaV3::field('register') !!}
                    @csrf
                    <button class="btn btn-primary d-grid w-100" id="submit_btn" type="submit">Register</button>
                </form>

                <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="{{route('login')}}">
                        <span>Login instead</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"
        integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>

<script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script>
    alertify.set('notifier', 'position', 'top-right');
    alertify.set('notifier', 'delay', 5);
    $(document).on('submit', "#register_form", function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('auth.register-store') }}",
            type: "POST",
            data: $(this).serialize(),
            beforeSend: function () {
                $("#submit_btn").text('Processing....');
                $("#submit_btn").prop('disabled', true);
                $(".error").text('');

            },
            success: function (data) {
                $("#submit_btn").text('Register');
                $("#submit_btn").prop('disabled', false);
                if (data.success) {
                    $("#register_form")[0].reset();
                    $(".error").text('');
                    alertify.success(data.message)
                } else {
                    alertify.error(data.message);

                }
            },
            error: function (error) {
                $("#submit_btn").text('Register');
                $("#submit_btn").prop('disabled', false);
                if ('errors' in error.responseJSON) {
                    $(".error").text('');
                    $.each(error.responseJSON.errors, (index, value) => {
                        $(document).find("#" + index + "_error").text(value[0]);
                    });
                }
            }
        });
    });

</script>
</body>
</html>
