<!DOCTYPE html>
<head>

		<meta charset="utf-8">
		<title>Podsjetnik</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        {!! Html::style('/css/bootstrap.min.css') !!}

</head>

<body>

    <div class="brand">{{ trans('site.title') }}</div>
    <div class="address-bar">{{ trans('site.sub-title') }}</div>


    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{ trans('site.home') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">{{ trans('site.profile') }} <span class="sr-only">(current)</span></a></li>
            <li><a href="#">{{ trans('site.search') }}</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">{{ trans('site.logout') }}</a></li>
            <li><a href="{!! url('language') !!}"> Jezik </a></li>
          </ul>
        </div>
      </div>
    </nav>

    {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}


</body>

