@extends('topo')

@section('content')


  

<div class="container">



<div class="col s12 m7">
  
    <div class="card horizontal">
      <div class="card-image">
        <img class="activator" src="{{$item->images->banner}}" id="sombra" style="width: 300px;height: 500px;padding: 25px;">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p class="caption"> {{$item->title}} - {{$item->year}}</p>

    <h5 class="caption"> {{$item->title}} - {{$item->synopsis}}</h5> <br>

   <h5 class="caption"> Tempo: {{$item->runtime}} Minutos</h5>
   <h5 class="caption"> Trailer: {{$item->trailer}}</h5>

     

     
      


        </div>
       
      </div>
    </div>
  </div>



</div>

</div>

  
 
@stop