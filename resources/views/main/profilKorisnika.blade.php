@extends('main.templates');

@section('main')

<form method="POST" class="form-horizontal" action="kod/create">
    {!! csrf_field() !!}
    Profil:
    <fieldset>
        <div class="col-lg-6">
            <div class="well bs-component">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Korisnicko ime</label>
                    <label for="inputEmail" class="col-lg-2 control-label">{{'username'}}</label>
                </div>

                <div class="form-group">
                    <label for="outputEmail" class="col-lg-2 control-label">E-mail</label>
                    <label for="outputEmail" class="col-lg-2 control-label">{{'email'}}</label>                </div>
                </div>


                 <div class="form-group">
                                    <label for="outputEmail" class="col-lg-2 control-label">E-mail</label>
                                    <label for="outputEmail" class="col-lg-2 control-label">{{'email'}}</label>                </div>
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