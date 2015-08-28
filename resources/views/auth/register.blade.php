<!DOCTYPE html>
<head>

		<meta charset="utf-8">
		<title>Podsjetnik</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        {!! Html::style('/css/bootstrap.min.css') !!}

</head>

<form method="POST" action="register" class="form-horizontal" style="width: 80%;">
  {!! csrf_field() !!}
  <fieldset>
    <legend>Registracija</legend>
    <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="username" >
      </div>
    </div>
    <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
          </div>
        </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password">
      </div>
    </div>
    <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Re type Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" name="password_confirmation">

          </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>