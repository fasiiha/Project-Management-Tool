@extends('layouts.loginlayout')
@section('content')
        <div class="form sign-in" style="display: flex; flex-direction: column; align-items: center;">
            <h2>Create your Account</h2>
                <form onsubmit="return validate()" action="signup" method="POST">
                    @csrf
                    <div style="display: flex; flex-direction: row;">
                    <div style="display: flex; flex-direction: column;">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" onkeyup="return validate(this)" required>
                        </label>
                        <p id="name">Name must be alphabets and contain 5-12 characters</p>
                    </div>
                    <div  style="display: flex; flex-direction: column;">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email2" onkeyup="return validate(this)" required>
                        </label>
                        <p id="email2">Email must be a valid address, e.g. me@mydomain.com</p>
                    </div>
                    </div>
                    <div style="display: flex; flex-direction: row;">
                    <div style="display: flex; flex-direction: column;">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" onkeyup="return validate(this)" required>
                        </label>
                        <p id="password">Password must be alphanumeric (@,- and _ also included) and be 8-20 characters</p>
                    </div>
                    <div>
                        <label>
                            <span>Phone Number</span>
                            <input type="tel" name="phone" required>
                        </label>
                    </div>
                    </div>
                    <div class="field" style="display: flex; flex-direction: row;">
                    <div style=" margin-right: 7%">
                        <label>
                            <span>Date Of Birth</span>
                            <input type="date" name="date">
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>Address</span>
                            <input type="text" name="address">
                        </label>
                    </div>
                    </div>
                    <button type="submit" class="offset-lg-3 offset-md-3 offset-sm-3">Sign Up</button>
                </form>
            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h3>Don't have an account? Please Sign up!<h3>
                    </div>
                    <div class="img__text m--in">
                        <h3>If you already have an account, just sign in.<h3>
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up" style="display: flex; flex-direction: column; align-items: center;">
                    <h2>Login</h2>
                    <form onsubmit="return validate()" action="login" method="post">
                    @csrf
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required >
                        </label>
                        <label>
                            <span>Password</span>
                            <input type="password" name="pass" required>
                        </label>
                        <p id="email">Enter a valid address, e.g. me@mydomain.com</p>
                        <button type="submit" class="offset-lg-3 offset-md-3 offset-sm-3">Sign In</button>
                    </form>
                </div>
            </div>
@endsection