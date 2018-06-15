@extends('layouts.app')

@section('content')
<style>
    
    .home-h1{
        margin-top:20px;
        font-size: 50px;
        color: #696969;
    }
    .landing-h4{
        font-size: :24px;
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
    .manegment{
        position: relative;
        float: left;
        margin: 0 auto;
    }


</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="home-h1">Management</h1>


        <div class="row">
        @foreach($aquariums as $aquarium)
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" >
            <a href="/Aquarium/{{ $aquarium->id }}" title=""><img  src="{{ asset( 'assets/img/PAKS85_sansyainkyodaisuisou_TP_V.jpg') }}" alt="...">
              <div class="caption">
                <h3>{{ $aquarium->aqua_name }}</h3></a>
                <p><a href="/Aquarium/{{ $aquarium->id }}" class="btn btn-primary" role="button">show</a> <a href="/Aquarium/{{ $aquarium->id}}/edit" class="btn btn-default" role="button">edit</a></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            {{ $aquariums->render() }}
          </ul>
        </nav>
    </div>
</div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="home-h1">Works</h1>



        </div>
    </div>
</div>
@endsection
