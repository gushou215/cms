@extends('layouts.app')
@section('heads')
    <link rel="stylesheet" href="{{asset('templates/default/css/index.css')}}">
    <link href="https://cdn.bootcdn.net/ajax/libs/Swiper/4.3.0/css/swiper.min.css" rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/Swiper/4.3.0/js/swiper.min.js"></script> 
@endsection
@section('content')
   
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        推荐文章
                    </div>
                    <div class="card-block">                      
                        <ul class="list-group">
                            @list(['iscommend'=>1,'limit'=>5])
                             <a href="{{$field['url']}}" class="list-group-item">{{$field['title']}}</a>
                            @endList
                        </ul> 
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination"></div>
                    
                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    
                    <!-- 如果需要滚动条 -->
                    {{--  <div class="swiper-scrollbar"></div>  --}}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        热门文章
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @list(['ishot'=>1,'limit'=>5])
                             <a href="{{$field['url']}}" class="list-group-item">{{$field['title']}}</a>
                            @endList
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            @category
            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        {{$field['name']}}
                    </div>
                    <div class="card-block">                      
                        <ul class="list-group">
                            @list(['cid'=>[$field['id']],'limit'=>8])
                             <a href="{{$field['url']}}" class="list-group-item">{{$field['title']}}</a>
                            @endList
    
                        </ul> 
                    </div>
                </div>
            </div>
            @endCategory
        </div>
    </div>
    <style>
        .swiper-container {
            width: 100%;
            height: 300px;
        } 
    </style>
    <script>        
        var mySwiper = new Swiper ('.swiper-container', {
          loop: true, // 循环模式选项
          autoplay: true,//可选选项，自动滑动
          
          // 如果需要分页器
          pagination: {
            el: '.swiper-pagination',
          },
          
          // 如果需要前进后退按钮
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          
          // 如果需要滚动条
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        })        
    </script>
    @include('layouts._footer')
@endsection