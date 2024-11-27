<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="forms/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="forms/css/style.css">
      {{-- favicon --}}
      <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">
</head>
<body>



<x-guest-layout>
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h1 class="form-title"><b>Sign up</b></h1>
                    <x-validation-errors class="text-danger" style="color:red !important;" />

                    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                        @csrf

                        <div class="form-group">
                            <label for="name"></label>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" placeholder="Your Name" />

                        </div>

                        <div class="form-group">
                            <label for="email"></label>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autocomplete="username" placeholder="Your Email" />

                        </div>

                        <div class="form-group">
                        <label for="phone"></label>
                        <x-input id="phone" class="block mt-1 w-full" type="phone" name="phone" :value="old('phone')"  autocomplete="username" placeholder="Your Phone" />
            </div>

            <div class="form-group">
            <label for="address"></label>
            <x-input id="address" class="block mt-1 w-full" type="address" name="address" :value="old('address')"  autocomplete="username" placeholder="Your Address" />
            </div>

                        <div class="form-group">
                            <label for="password"></label>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password"  autocomplete="new-password" placeholder="Password" />

                        </div>

                        <div class="form-group">
                            <label for="password_confirmation"></label>
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"  autocomplete="new-password" placeholder="Repeat your password" />

                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="form-group">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms"  />
                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <div class="form-group form-button">
                            <x-button class="form-submit">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>

                <div class="signup-image">
                    <figure><img src="forms/images/signup4.jpg" alt="sign up image"></figure>
                    <a href="{{ route('login') }}" class="signup-image-link"><b>I am already a member</b></a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

<script src="forms/vendor/jquery/jquery.min.js"></script>
    <script src="forms/js/main.js"></script>
</body>
</html>


