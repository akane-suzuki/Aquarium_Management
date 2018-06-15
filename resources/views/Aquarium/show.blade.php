@extends('layouts.app')

@section('content')

<style>
  span{
        color: #696969;
 }

.name{
        margin-top:20px;
        font-size: 42px;
}
.col1{
  width: 150px;
  display: inline-block;
}

.col2{
  width: 250px;
  display: inline-block;
  font-size: 18px;
  padding-left:15px;
}

.col3{
  display: inline-block;
  width: 100%;
  white-space: pre-wrap;
}

</style>

<div class="container">

    <div class="row">
        <div class="col-sm-7 col-md-4 col-md-offset-1">
          <div class="thumbnail">
            <img  src="{{ asset( 'assets/img/PAKS85_sansyainkyodaisuisou_TP_V.jpg') }}" alt="...">
          </div>
         </div>
          

        <div class="col-md-5 ">
          <ul class="list-group">
            <li class="list-group-item"> <span class="name">{{ $details->aqua_name }} 水槽</span></li>
            <li class="list-group-item"> <span class="col1">Main fishes </span>
                                         <span>:</span>
                                         <span class ="col2"> {{ $details->fish }}</span></li>

            <li class="list-group-item"> <span class="col1">Main water plants </span>
                                         <span>:</span>
                                         <span class ="col2"> {{ $details->plants_name }}</span></li>

            <li class="list-group-item"> <span class="col1">Start Day</span>
                                         <span>:</span>
                                         <span class ="col2"> {{ $details->set_up }}</span></li>

            <li class="list-group-item"> <span class="col1">Amount of water</span>
                                         <span>:</span>
                                         <span class ="col2"> {{ $details->capa }} L</span></li>

            <li class="list-group-item"> <span class="col1">the quality of water</span>
                                         <span>:</span>
                                         <span class ="col2"> Ph {{ $details->ph }}</span></li>

            <li class="list-group-item"> <span style="font-size: 30px;">memo</span>
            <span style="word-wrap: break-word; font-size: 18px;"> {{ $details->memo }}</span></li>
          </ul>
        </div>
  </div>

  <p></p>
</div>

@endsection