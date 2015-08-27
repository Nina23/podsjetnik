<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! Html::style('/css/bootstrap.min.css') !!}

</head>

<form method="POST" class="form-horizontal" action="login">
    {!! csrf_field() !!}

    <fieldset>
        <div class="col-lg-6">
            <div class="well bs-component">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>
                </div>
                <div>

                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button class="btn btn-info" type="submit">Login</button>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </fieldset>
</form>