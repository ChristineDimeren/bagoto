<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{ asset('/css/layout.css') }}" rel="stylesheet">
   
    <title>Kitchen Project</title>
</head>
<body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fa-solid fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
           <!--<img src="{{asset('images/logo.png')}}">-->
            <h3>Pisopay<span>.com</span></h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->

    <div class="container">
        @yield('content')
    </div>
    <!--sidebar start-->
        <div class="sidebar">
            <center>
                <img src="/images/1.jpg" class="profile_image" alt="">
                <h4>Name</h4>
            </center>
            <a href="#home"><i class="fa-solid fa-house-user"></i><span>Menu</span></a>
            <a href="#"><i class="fa-solid fa-clipboard-list"></i><span>Transaction</span></a>
            <a href="#"><i class="fa-solid fa-file-invoice"></i><span>Record</span></a>
            <a href="#"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
        </div>
    <!--sidebar end-->

        
</body>
</html>