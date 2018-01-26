@extends('topo')

@section('content')

@foreach ($lista as $filme)


 <a href="/search/{{$filme->imdb_id}}"><img src="{{$filme->images->banner}}" style="width: 300px;height: 500px;padding: 25px; bottom: 10px;" /> </a>
   


@endforeach
<br>

<ul class="pagination" align="center">
   <li class="disabled"><a href="#!"><i class="material-icons"></i></a></li>
@for ($i = 1; $i < 20+1; $i++)
   

    <li class="waves-effect"><a href="{{$i}}">{{$i}}</a></li>

   

 
@endfor
 <li class="waves-effect"><a href="#!"><i class="material-icons"></i></a></li>
   </ul>



 
@stop