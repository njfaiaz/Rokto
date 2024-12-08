@extends('auth.admin_app')

@section('title', 'Admin Login')


@section('admin_login')
<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div id="login_alert"></div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="header">
                        <img class="logo" src="{{ asset('admin/assets/images/logo.svg') }}" alt="">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            <div class="invalid-feedback"></div>
                        </div>


                        <div class="mb-3">
                            <a href="/forgot-pass" class="text-decoration-none">Forgot Password?</a>
                        </div>

                        <div class="mb-3 d-grid">
                            <input type="submit" value="Login" id="login_btn" class="btn btn-primary btn-block waves-effect waves-light">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ asset('admin/assets/images/signin.svg') }}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

