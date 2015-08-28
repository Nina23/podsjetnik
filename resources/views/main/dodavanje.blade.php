@extends('main.templates');

@section('main')


<form method="POST" class="form-horizontal" action="kod/create">
    {!! csrf_field() !!}

    <fieldset>
        <div class="col-lg-6">
            <div class="well bs-component">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Naziv skripte*</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="Naziv Vase skripte" class="form-control" name="scripte-name" value="{{ old('script-name') }}">
                    </div>
                </div>

                <div class="form-group">
                                    <label for="inputSlug" class="col-lg-2 control-label">Slug koji zelite</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Unesite slug za ovaj kod" class="form-control" name="slug" value="{{ old('slug') }}">
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


@stop