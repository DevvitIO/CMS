@extends('layouts.public-master')

@section('content')

    <div class="wrapper">
        @include('partials.public-header')

        <main>
                <div class="auth-container">
                    <header class="auth-block-header">
                        <img src="images/signup-logo.png" alt="Devvit Logo" class="auth-block-header-logo">
                        <h3 class="auth-block-header-heading">Sign up with Devvit.io</h3>
                        <p class="auth-block-paragraph">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type.
                        </p>
                    </header>
                    <div class="auth-block-form">
                        <nav>
                            <ul class="auth-action-list">
                                <li class="auth-action-list-item">Sign up</li>
                                <li class="auth-action-list-item auth-action-list-item-active">Login</li>
                            </ul>
                        </nav>
                        <form class="signup-form signup-form-disabled" id="signup-form" action="" method = "post">
                            <input type="email" class="signup-form-input" placeholder="EMAIL ADDRESS" name="signup-email">
                            <input type="text" class="signup-form-input" placeholder="USERNAME" name="signup-username">
                            <input type="password" class="signup-form-input" placeholder="PASSWORD" name="signup-password">
                            <input type="password" class="signup-form-input" placeholder="REPEAT PASSWORD" name="signup-password-repeat">
                            <button type="submit" class="signup-form-submit-btn" name = "signup-btn">Sign Up</button>
                        </form>
                        <form class="signup-form" id="login-form" action="" method="post">
                            <input type="text" class="signup-form-input" placeholder="USERNAME" name="login-username" required>
                            <input type="password" class="signup-form-input" placeholder="PASSWORD" name="login-password" required>
                            <button type="submit" class="signup-form-submit-btn" name="login-btn">Login</button>
                        </form>
                        <p class="signup-terms">By signing up, you agree to the <a href="#" class="terms-link">Terms of services</a> and <a href="#" class="terms-link">Privacy Policy</a></p>
                    </div>
                </div>
            </main>
    </div>

        @include('partials.public-footer')

@endsection
