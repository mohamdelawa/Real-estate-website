@extends('company.layout.app')
@section('title')
    <title>الصفحة الرئيسية</title>
@stop
@section('body')
    onload="country_select('{{$company->account->profile->country}}')"
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
                        <form id="forms" class="form-sample" enctype="multipart/form-data" method="post" action="{{route('company_update_profile')}}">
                            @csrf
                            <div class="nav-profile-image " style="justify-content: center; display: flex" >
                                <img src="{{asset($company->logo_image)}}"  style="border-radius: 50%;" alt="profile">
                            </div>

                            <div class="row" style="margin-top: 40px; justify-content: center">
                                <div class="col-lg-4 col-sm-4 col-12 main-box-layout">
                                    <div class="instagram-box rounded">
                                        <i class="mdi mdi-home" aria-hidden="true"></i>
                                    </div>
                                    <div class="box-layout-text text-right" style="padding-right: 10px">
                                        <h1>{{count($company->realestates)}}</h1>
                                        <h3>عقارات</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-12 main-box-layout">
                                    <div class="pinterest-box rounded">
                                        <i class="mdi mdi-pinterest " aria-hidden="true"></i>
                                    </div>
                                    <div class="box-layout-text text-right" style="padding-right: 10px">
                                        <h1>{{count($company->followers)}}</h1>
                                        <h3>متابعون</h3>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body ">
                            <div class="card" style="text-align: right">
                                <div class="card-body " style="text-align: right">
                                    <p class="card-description"> معلومات الشركة </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">اسم الشركة</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{$company->company_name}}" required />
                                                    @error('company_name')
                                                    <div class="badge badge-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">الرقم الوطني</label>
                                                <div class="col-sm-9">

                                                    <input type="number" class="form-control @error('ssid') is-invalid @enderror "  name="ssid" value="{{$company->ssid}}" required/>
                                                    @error('ssid')
                                                    <div class="badge badge-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-5">
                                            <div style="margin-right: 100px; margin-bottom: 20px">
                                                <img class="img card-img" height="200"  src="{{asset($company->account->profile->profile_image)}}" alt="profile">
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
                                            <div class="form-group row " style="justify-content: center; display: flex; margin-top: 20px;">
                                                <div class="col-sm-4 col-lg-10 col-md-12" style="direction: ltr; text-align: right">
                                                    <label>تحميل صورة الشعار</label>
                                                    <input type="file" class="file-upload-default @error('logo_image') is-invalid @enderror" multiple  name="logo_image"   />
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info" disabled="">
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-gradient-primary" type="button"><b>تحميل</b></button>
                                                        </span>
                                                    </div>
                                                    @error('logo_image')
                                                    <div class="badge badge-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-description"> معلومات شخصية </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">الاسم الأول</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$company->account->profile->first_name}}" required />
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
                                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror " name="last_name" value="{{$company->account->profile->last_name}}" required  />
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
                                                        <option @if($company->account->profile->gender=='ذكر') selected    @endif  value="ذكر">ذكر</option>
                                                        <option @if($company->account->profile->gender=='أنثى') selected  @endif  value="أنثى">أنثى</option>
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
                                                    <input class="form-control @error('dob') is-invalid @enderror" type="date"  value="{{$company->account->profile->dob}}" name="dob" required/>
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
                                                    <input type="text" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{$company->account->profile->address_1}}" required  />
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
                                                    <input type="text" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{$company->account->profile->address_2}}" />
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
                                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror "   name="phone_number"   value="{{$company->account->profile->phone_number}}" required/>
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
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror "  name="email" value="{{$company->account->email}}" required/>
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
                                                        <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name"  value="{{$company->account->user_name}}"  id="inlineFormInputGroupUsername2" required>
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
                                    <p class="card-description"> الوثائق الرسمية  </p>
                                    <div class="row">
                                        <?php $count = 1;?>
                                        @foreach($company->company_documents as $company_document)
                                                <?php $count++;?>
                                            <div class="card col-lg-6 col-md-12 col-sm-12" >
                                                <img class="card-img-top" src="{{asset($company_document->url)}}" alt="Card image" style="width:100%">
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                        <a  data-toggle="modal" data-target="#myModaldocument{{$count}}" class="btn btn-danger ">حذف</a>
                                                    </h4>
                                                    <div class="modal" id="myModaldocument{{$count}}" style="direction :rtl">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">حذف مستند </h4>
                                                                    <button type="button" class="close" style="margin-right:70%" data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body" style="margin-left:60%">
                                                                    هل تريد حذف المستند؟
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <a href="{{route('company_delete_document_company',['id'=>$company_document->id])}}"><button type="button" class="btn btn-primary"  >نعم</button></a>

                                                                    <button type="button" class="btn btn-danger" style="margin-left:55%" data-dismiss="modal">لا</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <p class="card-description"> العقارات </p>
                                    <div class="row">
                                        <?php $count =1; ?>
                                        @foreach($company->realestates as $realestate)
                                                <?php $count++; ?>
                                            <div class="card col-lg-6 col-md-12 col-sm-12" >
                                                <img class="card-img-top" src="{{asset($realestate->main_image)}}" alt="Card image" style="width:100%">
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                        @if($realestate->status =='غير متاح')
                                                            <span class=" badge badge-danger " >{{$realestate->status}}</span>
                                                        @else
                                                            <span class="badge badge-success ">{{$realestate->status}}</span>
                                                        @endif
                                                        <span class="badge badge-success " >{{$realestate->type}}</span>

                                                    </h4>
                                                    <p class="card-text">{{$realestate->description}}</p>
                                                    <a href="{{route('company_show_realestate',['id'=>$realestate->id])}}" class="btn btn-primary ">المزيد</a>
                                                    <a  data-toggle="modal" data-target="#myModal{{$count}}" class="btn btn-danger ">حذف</a>
                                                    <div class="modal" id="myModal{{$count}}" style="direction :rtl">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">حذف عقار </h4>
                                                                    <button type="button" class="close" style="margin-right:70%" data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body" style="margin-left:60%">
                                                                    هل تريد حذف العقار؟
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <a href="{{route('company_delete_realestate',['id'=>$realestate->id])}}"><button type="button" class="btn btn-primary"  >نعم</button></a>

                                                                    <button type="button" class="btn btn-danger" style="margin-left:55%" data-dismiss="modal">لا</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
