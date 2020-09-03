@extends('layouts.app')
@section('content')
<!-- 登录 Start -->
<!-- <div class="login_logo"><img src="/assets/home/img/logo.jpg" alt=""></div> -->
<form action="{{ route('write.edit',$write) }}" method="POST" accept-charset="utf-8">
    <div class="login_container" >
        <div class="login_block login_margin">
            <i class="icon icon-file-word login_i" style="font-size:1rem"></i>
            <input type="tel" name="number" value="{{ $write->number }}" placeholder="请输入抄经次数" class="input login_input" >
        </div>
        @csrf
        @method('post')
        <button type="sublimt" class="btn login_btn ajax-post" >提交</button>
    </div>
    <div class="white_fixed"></div>
</form>
<!-- 登录 End -->
@endsection
