@extends('layouts.master')

@section('content')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
          <div class="animate form login_form">
            <section class="login_content">
                {!! Form::open(['route' => 'login'])  !!}
                    <h1>@lang('auth.login')</h1>
                    <div>
                        {{ Form::email('email', old('email'), ['placeholder' => trans('user.pl_email'), 'class' => 'form-control', 'required' => true]) }}
                    </div>
                    <div>
                        {{ Form::password('password', ['placeholder' => trans('user.pl_password'), 'class' => 'form-control', 'required' => true]) }}
                    </div>
                    <div>
                        {{ Form::submit(trans('auth.btn_login'), ['class' => 'btn btn-default submit']) }}
                        <a class="reset_pass" href="#">@lang('auth.lost_password')</a>
                    </div>

                    <div class="clearfix"></div>

                {!! Form::close() !!}
            </section>
          </div>
        </div>
    </div>
@endsection
