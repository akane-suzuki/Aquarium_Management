@extends('layouts.app')

@section('content')

<style>
    .landing{
        height: 600px;
        background-position: center center fixed;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
                background-image: url( {{ asset( 'assets/img/https___www.pakutaso.com_shared_img_thumb_WPIMGL2712.jpg') }} );
    }

    .landing-h1{
        margin-top:200px;
        font-size: 50px;
        color: #696969;
    }
    .landing-h4{
        font-size: :24px;
        color: #696969;
    }

    .landding-btn{
    font-size: 30px;
    display: inline-block;
    padding: 3px 30px;
    text-decoration: none;
    color: #4682b4;
    border: solid 2px #4682b4;
    border-radius: 3px;
    transition: .4s;
    margin: 50px 30px 0 0;
    }

    .landding-btn:hover {
    background: #4682b4;
    color: #f0f8ff;
    }

</style>
<div class="landing">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row col-md-8">
                <h1 class="landing-h1">Aquarium management</h1>
                <h4 class="landing-h4">水槽の情報をいい感じに管理したい</h4>

                <a class="landding-btn" href="{{ url('/login') }}" title="">Login</a>
                <a class="landding-btn" href="{{ url('/register') }}" title="">Register</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
