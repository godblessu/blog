<!DOCTYPE html>
<html class="ui-page-login">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>@yield('title')</title>
		<link href="/libs/css/bootstrap.css" rel="stylesheet" />
	</head>
	<body>
		@section('sidebar')
            <!-- 通用header -->
			<div id="header">
				<div class="container">
					<nav class="navbar navbar-default">
				        <div class="container-fluid">
				          <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				            </button>
				            <a class="navbar-brand" href="#">@yield('logo','么事')</a>
				          </div>
				          <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav">
				              <li class="active"><a href="#">首页</a></li>
				              <li><a href="#"></a>发现</li>
				              <li><a href="#">Contact</a>热门</li>
				              <li><a href="#">Contact</a>原创</li>
				              <li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">分类 <span class="caret"></span></a>
				                <ul class="dropdown-menu">
				                  <li><a href="#">Action</a></li>
				                  <li><a href="#">Another action</a></li>
				                  <li><a href="#">Something else here</a></li>
				                  <li role="separator" class="divider"></li>
				                  <li class="dropdown-header">Nav header</li>
				                  <li><a href="#">Separated link</a></li>
				                  <li><a href="#">One more separated link</a></li>
				                </ul>
				              </li>
				              <form class="navbar-form navbar-left" role="search">
						        <div class="form-group">
						          <input type="text" class="form-control" placeholder="Search">
						        </div>
						        <button type="submit" class="btn btn-default">Submit</button>
						      </form>
				            </ul>
				            <ul class="nav navbar-nav navbar-right">
				              <li class="active"><a href="./">@yield('my','我') <span class="sr-only">(current)</span></a></li>
				              <li><a href="../navbar-static-top/">我的主页</a></li>
				              <li><a href="../navbar-fixed-top/">私信</a></li>
				              <li><a href="../navbar-fixed-top/">设置</a></li>
				              <li><a href="../navbar-fixed-top/">退出</a></li>
				            </ul>
				          </div><!--/.nav-collapse -->
				        </div><!--/.container-fluid -->
					</nav>
				</div>
			</div>
			<!-- 通用header end -->		
        @show

        <div class="container">
            @yield('content')
        </div>
        <script src="js/sea.js"></script>
        <script>
	        seajs.config({
	            base: "/libs/",
	            alias: {
	              "jquery": "js/jquery/1.10.1/jquery.js"
	            }
	        });
        </script>
	</body>
</html>