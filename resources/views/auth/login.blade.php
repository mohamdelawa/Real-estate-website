
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <style>
     body {
         background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url({{asset("asset/auth/image_site/realestate.jpg")}});
         background-position: center;
         background-size: cover;
         height: 100vh;
         width: 100%;
         overflow: hidden;
         display: flex;
         justify-content: center;
         align-items: center;
     }


 </style>
</head>

<body>

<div class="container " style="text-align: right;">
    <header class="navbar navbar-expand-lg bg-transparent  sticky-top" style="position: absolute; width: 100%;  margin-right: 50px">
        <div class="container" >
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start slider" style="margin-left: 80%">

                <ul class="mb-2 mb-md-0 department_logo " style="list-style-type: none; margin-top: 20px"  >
                    <li> <a href="{{route('home')}}"> <img src="{{asset('asset/img/logo.png')}}" class="logo" width="120px"> </a></li>
                </ul>

            </div>
        </div>
    </header>
        <div class="row">
            <div class="col-lg-3 "></div>
            <!-- login area -->
            <div class="col-lg-5  " style="margin-bottom: 20px;">
                <div class="card">
                    <div class="card-header">تسجيل الدخول</div>
                    <div class="card-body">
                         @include('massege')
                        <form action="{{route('authenticate')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">البريد الالكتروني أو اسم المستخدم</label>
                                <input type="text"  id="name" class="form-control"  name="username" value="{{ old('username') }}" required  autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">كلمة السر </label>
                                <input type="password" class="form-control" id="password" name="password" required autofocus>
                            </div>

                            <div class="form-check form-check-inline">
                                <input  type="checkbox" class="form-check-input" id="remember-me" name="remember_me" >
                                <label class="form-check-label" for="remember-me">تذكرني</label>
                            </div>
                            <div >

                                <h6 style="display: inline; padding-right: 10px">  <a href="{{Route('register')}}">    أنشئ حساب</a></h6>
                                <input type="submit" class="btn btn-primary" value="تسجيل الدخول">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>


</div>

</body>

</html>
