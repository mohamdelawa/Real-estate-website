@extends('public.layout.app')
@section('title','dept')

@section('body')

<div class="widget-2 widget mb-4">
        <div class="widget-body row">
            <div class="col-lg-8 mx-auto">

                <form class="form d-flex no-gutters mb-20"  method="get" action="{{route('search')}}">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-orange search-button">بحث</button>
                    </div>
                    <div class="col pl-12">
                        <input type="text" class="form-control input-search" id="widget2SearchInput" name="search" placeholder="ابحث هنا عن ما ترغب به.....">
                    </div>

                </form>
                {{--list of realestate type--}}
                <div class="main-categories-list">
                    <div class="row">
                        @foreach($types as $type)
                            <div class="col-lg col-4">
                                <a href="{{route('showByType',$type->id)}}" class="item d-block text-center text-white py-3 h-100">
                                    <div class="icn">
                                        <img src="{{asset($type->emoji)}}" class="fas">
                                    </div>
                                    <div class="font-size-16">{{$type->type}}</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--end of realestate type--}}
            </div>
        </div>
    </div>
<div class="row d-flex mr-auto justify-content-center" style="direction: rtl">
    @foreach($type_id as $post)
        <div class="card col-4 bg-dark text-white " style="width: 18rem;margin: 10px;padding: 10px">
            <img src="{{asset($post['main_image'])}}" class="card-img-top" alt="image">
            <div class="card-body">
                <h5 class="card-title">{{$post['price']}}$</h5>
                <h5 class="card-title">{{$post['space']}}م<sup>2</sup></h5>
                <span class="card-title "><b>{{$post['type']}}</b></span>
                <p class="card-text">{{$post['description']}}</p>
                <a href="{{route('product',$post['id'])}}" class="btn btn-orange text-white">مزيد من التفاصيل</a>
            </div>
        </div>
    @endforeach
        @if($type_id->isEmpty())
            <div class="d-flex justify-content-center" >
                <h1>
                    لا يوجد نتائج
                </h1>
            </div>>
        @endif
</div>
<br>
<div class="d-flex justify-content-center "  style="margin-top: 20px" >   {{$type_id->links()}} </div>
<br>
@stop
@section('css')
    <style>
        [aria-current] .page-link {
            background-color: orange !important;
        }

        [rel='prev'], [rel='next'] {
            background-color: #202326 !important;
        }

        .pagination > li :not([rel='prev'],[rel='next'],[aria-current] .page-link) {
            background-color: #202326 !important;
        }
        .pagination > li > a,
        .pagination > li > span {
            color: orange ;
        }
    </style>
@stop
