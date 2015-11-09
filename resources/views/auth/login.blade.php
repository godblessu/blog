@extends('layouts.main')

@section('title', '登录')

@section('content')

<div class="wrapper">
    <link rel="stylesheet" href="/css/signin.css">
	<style>
	    .modal-backdrop{
	        background-color: #000000;
	        opacity: 0.5 !important;
	        filter: alpha(opacity=50) !important;
	    }
	</style>
	<div class="wrapper">
	    <h1>登&nbsp;录</h1>
	    <form id="loginFrm" role="form" method="post" action="/auth/login" onsubmit="return false;" novalidate="novalidate">
	    	{!! csrf_field() !!}
	        <div class="form-group">
	            <input type="text" class="form-control" name="username" id="username" placeholder="电子邮箱/手机号" value="{{ old('username') }}">
	            <i class="icon icon-user"></i>
	            <!-- 错误信息 popover -->
	            <div class="err-popover-out">
	                <div class="err-popover">
	                    <div class="tri-right"></div>
	                    <div class="tri-right-in"></div>
	                    <div class="err-popover-content"></div>
	                </div>
	            </div>
	            <!-- 错误信息 popover end -->
	        </div>
	        <div class="form-group">
	            <input type="password" class="form-control" id="password" name="password" placeholder="密码">
	            <i class="icon icon-lock"></i>
	            <!-- 错误信息 popover -->
	            <div class="err-popover-out">
	                <div class="err-popover">
	                    <div class="tri-right"></div>
	                    <div class="tri-right-in"></div>
	                    <div class="err-popover-content"></div>
	                </div>
	            </div>
	            <!-- 错误信息 popover end -->
	        </div>
	       <div class="form-group clearfix">
	            <div class="form-left">
	                <input type="text" class="form-control" id="ccap-text" name="ccap" placeholder="验证码">
	                <i class="icon icon-shield"></i>
	            </div>
	            <div class="form-right">
	                <img class="ccap">
	            </div>
	            <!-- 错误信息 popover -->
	            <div class="err-popover-out">
	                <div class="err-popover">
	                    <div class="tri-right"></div>
	                    <div class="tri-right-in"></div>
	                    <div class="err-popover-content"></div>
	                </div>
	            </div>
	            <!-- 错误信息 popover end -->
	        </div>
	        <div class="checkbox">
		        <label class="checkbox" for="checkbox1">
	              <input type="checkbox" data-toggle="checkbox" value="" id="checkbox1" required="" class="custom-checkbox"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
	              	 记住我
	            </label>
	            <a href="/resetBySms" class="pull-right a">忘记密码？</a>
	            <input type="hiden" name="remember" id="rem_me" class="auto">
            </div>
<!-- 	        <div class="checkbox">
	            <label class="a" for="rem_me">
	                <span class="fake-check2"></span>
	                <input type="checkbox" name="remember" id="rem_me" class="auto">
	                记住我
	            </label>
	            <a href="/resetBySms" class="pull-right a">忘记密码？</a>
	        </div> -->
	        <button type="submit" id="submit" class="btn btn-blue form-control"><span>登录</span></button>
	    </form>
	    <!-- 是否需要填写完整信息 -->
	    <!-- <div id="go_profile_modal" class="modal fade"> -->
	    <div id="go_profile_modal">
	        <div class="jqui-dialog">
	            <div class="jqui-content">
	                <!-- <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal">
	                        <span aria-hidden="true">&times;</span>
	                        <span class="sr-only">Close</span>
	                    </button>
	                    <span class="modal-title">友情提示</span>
	                </div> -->
	                <div class="jqui-body">
	                    <p>
	                        <span class="normal-text">请完善您的个人信息，便于我们给您提供更优质的服务~</span>
	                        <a href="/profile" class="link">立即完善&gt;&gt;</a>
	                    </p>
	                    <div class="button-container">
	                        <label class="tips-label">
	                            <span class="fake-check2"></span>
	                            不再提示
	                        </label>
	                        <button class="btn btn-blue ensure">确定</button>
	                    </div>
	                </div>
	
	            </div>
	        </div>
	    </div>
	</div>   
</div>
@endsection