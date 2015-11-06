<!DOCTYPE html>
<html class="ui-page-login">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>@yield('title')</title>
		<link href="css/bootstrap.css" rel="stylesheet" />
	</head>
	<body>
		@section('sidebar')
            <!-- 通用header -->
			<div class="header">
			    <div class="col-md-2 col-sm-2">
			        <a href="/" class="logo-a">
			            <img src="/img/logo.png" alt="APICloud" class="logo">
			        </a>
			    </div>
			    <div class="col-md-8 col-sm-8">
			        <div class="link-group">
			            <a href="/cloud" class="links">云API</a>
			            <a href="/client" class="links">端API</a>
			            <a href="/dev" class="links">开发工具</a>
			            <a href="/price" class="links">价格</a>
			            <a target="_blank" href="http://docs.apicloud.com/" class="links">文档</a>
			            <a target="_blank" href="http://community.apicloud.com/bbs/" class="links">社区</a>
			            <a href="/modulestore" target="_blank" class="links">模块Store</a>
			        </div>
			    </div>
			    <div class="col-md-2 col-sm-2">
			        <div class="link-group link-group-2">
			            <a href="/signup">注册</a>
			            <span>|</span>
			            <a href="/signin">登录</a>
			        </div>
			        <div id="ifSigned">
			            <div class="signedGroup dropdown">
			                <img src="/img/favicon-30.png"  alt="APICloud" >
			                <a href="javascript:void(0)" class="toConsole dropdown-toggle" data-toggle="dropdown">
			                    <span>example@apicloud.com</span>
			                    <span class="arr-b"></span>
			                </a>
			                <ul class="dropdown-menu index-menu" role="menu">
			                    <li>
			                        <a href="/console">
			                            <i class="fa icon-tasks"></i>
			                            控制台
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/module_pub_history">
			                            <i class="fa icon-mod"></i>
			                            模块管理
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/profile">
			                            <i class="fa icon-cog"></i>
			                            设置
			                        </a>
			                    </li>
			                    <li id="sign_out">
			                        <a href="javascript:void(0)">
			                            <i class="fa icon-signout"></i>
			                            退出
			                        </a>
			                    </li>
			                </ul>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- 通用header end -->
		
        @show

        <div class="container">
            @yield('content')
        </div>
	</body>
</html>