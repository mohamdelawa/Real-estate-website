@extends('user.layout1.app')
@section('title')
    <title>الصفحة الشخصية</title>
@stop
@section('body')
    onload="country_select('{{$user->profile->country}}')"
@stop
@section('page padding')
    <div class="content-wrapper" style="direction: rtl">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2" style="margin-left: 10px" >
                  <i class="mdi mdi-bank"></i>
                </span> الصفحة الرئيسية
            </h3>
        </div>
        <div class="row "  >
            <div class="col-12 grid-margin">
                <div class="card " >
                    <div class="card-body">
                        <h4 class="card-title" style="text-align:right"> الصفحة الرئيسية </h4>
                        <form id="forms" class="form-sample" enctype="multipart/form-data" method="post" action="{{route('user_update_profile')}}">
                            @csrf

                            <div class="card-body ">
                                <div class="card" style="text-align: right">
                                    <div class="card-body row " style="text-align: right">

                                        <div class="col-lg-9">
                                        <p class="card-description"> معلومات شخصية </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">الاسم الأول</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$user->profile->first_name}}" required />
                                                        @error('first_name')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">الاسم الأخير</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror " name="last_name" value="{{$user->profile->last_name}}" required  />
                                                        @error('last_name')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">الجنس</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control @error('gender') is-invalid @enderror" name="gender" required >
                                                            <option @if($user->profile->gender=='ذكر') selected    @endif  value="ذكر">ذكر</option>
                                                            <option @if($user->profile->gender=='أنثى') selected  @endif  value="أنثى">أنثى</option>
                                                        </select>
                                                        @error('gender')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">تاريخ الميلاد</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control @error('dob') is-invalid @enderror" type="date"  value="{{$user->profile->dob}}" name="dob" required/>
                                                        @error('dob')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-description"> العنوان </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">العنوان الأول</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{$user->profile->address_1}}" required  />
                                                        @error('address_1')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">العنوان الثاني (إختياري)</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{$user->profile->address_2}}" />
                                                        @error('address_2')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"  >الدولة</label>
                                                    <div class="col-sm-9">

                                                        @include('auth.drop_select_country')
                                                        @error('country')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">رقم الهاتف</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror "   name="phone_number"   value="{{$user->profile->phone_number}}" required/>
                                                        @error('phone_number')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-description"> معلومات الحساب </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">البريد الإلكتروني</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror "  name="email" value="{{$user->email}}" required/>
                                                        @error('email')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">اسم المستخدم</label>
                                                    <div class="col-sm-9" style="direction: ltr">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                            </div>
                                                            <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name"  value="{{$user->user_name}}"  id="inlineFormInputGroupUsername2" required>
                                                            @error('user_name')
                                                            <div class="badge badge-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> كلمة المرور الجديدة</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" onkeyup="verify()"  class="form-control @error('password') is-invalid @enderror" name="password"   />
                                                        @error('password')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> تأكيد كلمة المرور الجديدة</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" onkeyup="verify()"  class="form-control @error('verify_password') is-invalid @enderror" name="verify_password"  id="inlineFormInputGroupUsername2">

                                                    </div>
                                                    <label id="verify" style="color:red"></label>
                                                    @error('verify_password')
                                                    <div class="badge badge-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> كلمة المرور</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" onkeydown="abled_submit()"   class="form-control @error('old_password') is-invalid @enderror" name="old_password"  required >
                                                    </div>
                                                    @error('old_password')
                                                    <div class="badge badge-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <button class="btn btn-success" style="background-color:#ccc " id="submit" type="submit" disabled >حفظ</button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row">
                                                <div style="margin-right: 100px; margin-bottom: 20px">
                                                    <img class="img card-img" height="200"  src="{{asset($user->profile->profile_image)}}" alt="profile">
                                                </div>
                                                <div class="form-group row " style="justify-content: center; display: flex; margin-top: 20px;">
                                                    <div class="col-sm-4 col-lg-10 col-md-12" style="direction: ltr; text-align: right">
                                                        <label>تحميل الصورة الشخصية </label>
                                                        <input type="file" class="file-upload-default @error('profile_image') is-invalid @enderror" multiple  name="profile_image"   />
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class="form-control file-upload-info" disabled="">
                                                            <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-gradient-primary" type="button"><b>تحميل</b></button>
                                                        </span>
                                                        </div>
                                                        @error('profile_image')
                                                        <div class="badge badge-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function verify() {

            var password = document.forms['forms']['password'].value;
            var verify_password = document.forms['forms']['verify_password'].value;
            if(password.length <8 ){
                document.getElementById("verify").innerHTML = '<b>' + 'كلمة السر قصيرة يجب أن تكون أكثر من 8 حروف' + '</b>';
                document.getElementById("submit").disabled =true;
                document.getElementById("submit").style = 'background: #ccc';
            }else {
                if (verify_password != password) {
                    document.getElementById("verify").innerHTML = '<b>' + 'كلمة المرور غير متطابقة' + '</b>';
                    document.getElementById("submit").disabled = true;
                    document.getElementById("submit").style = 'background: #ccc';
                } else  {
                    document.getElementById("verify").innerHTML = '<b style="color:green; ">' + 'كلمة المرور متطابقة' + '</b>';
                    document.getElementById("submit").disabled = false;
                    document.getElementById("submit").style = 'background:#1bcfb4';
                }
            }

        }
        function country_select(value) {
            var x ;
            for (x in document.getElementById("country")) {
                text = document.getElementById('country')[x].value;

                if (text ===  value ) {
                    country[x].selected = "true";
                    country[x].disabled = false;

                }
            }

        }
        function abled_submit() {
            var old_password = document.forms['forms']['old_password'].value;
            var password = document.forms['forms']['password'].value;
            var verify_password = document.forms['forms']['verify_password'].value;

            if (password.length <= 0 && verify_password.length <= 0) {
                if (old_password.length >= 8) {
                    document.getElementById("submit").disabled = false;
                    document.getElementById("submit").style = 'background:#1bcfb4';
                }
            } else if (password.length >= 8 && verify_password.length >= 8) {
                if (old_password.length >= 8) {
                    document.getElementById("submit").disabled = false;
                    document.getElementById("submit").style = 'background:#1bcfb4';
                }
            }
        }
    </script>
@stop
@section('css')
    <style>
        .main-box-layout{
            position: relative;
            margin-bottom: 10px;
        }
        .instagram-box,.pinterest-box{
            color:#4E69A2;
            background-color: #3B5998;
            font-size:95px;
            height:100px;
            overflow: hidden;
            padding-left:3px;
        }
        .instagram-box{
            background-color: #B7378B;
            color:#BE4A96;
        }
        .pinterest-box{
            background-color: #BC081C;
            color:#C32032;
        }
        .box-layout-text{
            position: absolute;
            top:15px;
            color:#fff;
            right:25px;
            height: 100px;
            overflow: hidden;
        }
        .box-layout-text h1{
            font-size:30px;
            margin: 0px;
        }
    </style>
@stop
