@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>Register a new aquarium</h1>

          <div class="row">
               <div class="col-md-10">

                 {!! Form::model(array()) !!}
                  @if (count($errors) > 0)
                    <div id="error_explanation">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  <div class="label">
                    {{ Form::label('name') }}
                    {{ Form::text('name', '', ['placeholder' => 'ユーザ名を入力']) }}
                  </div>
                  <div class="label">
                    {{ Form::label('email') }}
                    {{ Form::email('email', '', ['placeholder' => 'メールアドレスを入力']) }}
                  </div>
                  <div class="label">
                    {{ Form::label('password') }}
                    {{ Form::password('password', ['placeholder' => 'パスワードを入力']) }}
                  </div>
                  <div class="label">
                    {{ Form::label('password_confirmation') }}
                    {{ Form::password('password_confirmation', ['placeholder' => 'パスワードを入力（確認）']) }}
                  </div>

                  <div class="field">
                    {{ Form::file('avatar') }}
                  </div>

                  <div class="submit">
                  <div class="actions">
                    {{ Form::submit('Create User', ['class' => 'btn btn--block']) }}

                 </div></div>
                  {!! Form::close() !!}


              </div>
          </div>
        </div>
    </div>
</div>

@endsection