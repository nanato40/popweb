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

    <h5 class="caption"> {{$item->synopsis}}</h5> <br>

    <h5 class="caption"> Status: {{$item->status}}</h5> 
    <h5 class="caption"> Número de Temporadas: {{$item->num_seasons}}</h5>
    <h5 class="caption"> Hora: {{$item->air_time}}</h5>
    <h5 class="caption"> Dia: {{$item->air_day}}</h5>
    <h5 class="caption"> Rede: {{$item->network}}</h5>

     <h5 class="caption">Episodios</h5>

<div class="scroll">
@for ($i = 0; $i < count($item->episodes); $i++)

    
  <button  class="w3-button w3-block w3-white w3-left-align">Temporada - {{$item->episodes[$i]->season}}  EP - {{$item->episodes[$i]->episode}} - {{$item->episodes[$i]->title}}</button>



@endfor
  
</div>

        </div>
       
      </div>
    </div>
  </div>



</div>

</div>

 
@stop