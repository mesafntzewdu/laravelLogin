<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
</head>
<body>
<div class="container">
    <div class="row justify-content-center" class="col-md-6">
        <div class="col-md-6">
            <input type="checkbox" id="check">
            <div class="login form">
                <header>Login</header>

                <!-- /resources/views/post/create.blade.php -->

                <h1>Create Post</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif

            <!-- Create Post Form -->

                <form action="/checkifvaid" method="POST">
                    @csrf

                    <input type="text" name="email" placeholder="Enter your email">
                    <input type="password" name="password" placeholder="Enter your password">
                    <a href="#">Forgot password?</a>
                    <input type="submit" class="button" value="Login">
                </form>

                <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
                </div>
            </div>
            <div class="registration form">
                <header>Signup</header>
                <form action="/saveUserData" method="POST">
                    @csrf

                    <input type="text" name="userName" placeholder="Enter your user name">
                    <input type="text" name="fatherName" placeholder="Enter your father name">
                    <input type="text" name="email" placeholder="Enter your email">
                    <input type="password" name="password" placeholder="Create a password">
                    <input type="password" name="password_confirmation" placeholder="Confirm your password">
                    <input type="submit" class="button" value="Sign up">


                    {{--            @foreach($array as $key)--}}

                    {{--                <h1>{{$key}}</h1>--}}

                    {{--                @endforeach--}}
                    {{--            <p>--}}

                    {{--                <ui>--}}
                    {{--            @foreach($var as $v)--}}

                    {{--                <li>{{ $v->user_name}}</li>--}}
                    {{--                <li>{{ $v->father_name}}</li>--}}
                    {{--                <li>{{ $v->email}}</li>--}}
                    {{--                <li>{{ $v->password}}</li>--}}

                    {{--            @endforeach--}}

                    {{--                </ui>--}}
                    {{--               {{ $var[0]['user_name'], $var[0]['email']}}--}}

                    {{--                @foreach($var as $user)--}}

                    {{--                <p> {{"$user->user_name  $user->father_name  $user->email  $user->password"}}</p>--}}

                    {{--                @endforeach--}}

                </form>
                <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap JavaScript -->
<script src="{{asset('asset/bootstrap.js')}}"></script>
</body>
</html>
