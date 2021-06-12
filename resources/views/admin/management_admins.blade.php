@extends('admin.layout.app')
@section('title')
    <title>إدارة المشرفين </title>
@stop
@section('page padding')
    @include('massege')
    <div class="content-wrapper" style="direction: rtl">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2" style="margin-left: 10px" >
                  <i class="mdi mdi-table-large"></i>
                </span>إدارة المشرفين
            </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">

                    <div class="card-body">

                        <h4 class="card-title" style="text-align:right">إدارة المشرفين </h4>
                        <div class="card-header border-0 " >

                            <input class="form-control mb-4 col-lg-3 col-md-5 col-sm-6 "  id="tableSearch" type="text" placeholder="بحث">

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped" style="direction: rtl">
                                <thead>
                                <tr>
                                    <th  style="text-align: center">#</th>
                                    <th  style="text-align: center">الإسم بالكامل</th>
                                    <th  style="text-align: center">البريد الإلكتروني</th>
                                    <th  style="text-align: center">اسم المستخدم</th>
                                    <th  style="text-align: center">الحالة	</th>
                                    <th  style="text-align: center" >المزيد</th>
                                </tr>
                                </thead>
                                <tbody  id="myTable">
                                <?php
                                $count =1;
                                ?>
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>
                                            <img src="{{asset($admin->account->profile->profile_image)}}" alt="Product1" class="img-circle img-size-32 mr-2">
                                            {{$admin->account->profile->first_name.' '.$admin->account->profile->last_name}}
                                        </td>
                                        <td style="text-align: center"> <a href="mailto:{{$admin->account->email}}"> {{$admin->account->email}}</a></td>
                                        <td style="text-align: center">{{$admin->account->user_name}}</td>
                                        <td style="text-align: center">
                                            @if($admin->account->status =='غير تشط')
                                                <span class="float-right badge badge-danger " >{{$admin->account->status}}</span>
                                            @else
                                                <span class="float-right badge badge-success ">{{$admin->account->status}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn" href="{{route('admin_show_admin',['id'=>$admin->id])}}"> <i class="nav-item mdi mdi-account-circle"></i></a>
                                                <a class="btn" href="{{route('admin_delete_admin',['id'=>$admin->id])}}"> <i class="nav-item mdi mdi-account-remove"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @if($admins->isEmpty())
                                    <tr>
                                        <td colspan="6">
                                            <div class="p-3">
                                                <p  style="text-align: center"> <b>الجدول لا يحتوي على بيانات</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
