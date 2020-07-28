@extends('layouts.app')



@section('title', $user->name . ' 的个人中心')



@section('content')



<div class="row">



  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">

    <div class="card ">

      <img class="card-img-top" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{ $user->name }}">

      <div class="card-body">

            <h5><strong>个人简介</strong></h5>

            <p>{{$user->introduction}}</p>

            <hr>

            <h5><strong>注册于</strong></h5>

            <p>{{ $user->created_at->diffForHumans() }}</p>

      </div>

    </div>

  </div>

  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

    <div class="card ">

      <div class="card-body">

          <h1 class="mb-0" style="font-size:22px;">
            {{ $user->name }} 
            &nbsp&nbsp&nbsp&nbsp&nbsp
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
            </svg>
            <span style="font-size:14px;">Email:{{ $user->email }}</span>
          </h1>
         
          

      </div>

    </div>

    <hr>



    {{-- 用户发布的内容 --}}

    <div class="card ">

      <div class="card-body">

        暂无数据 ~_~

      </div>

    </div>



  </div>

</div>

@stop