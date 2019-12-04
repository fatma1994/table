@extends("index")

@section("contenu")
 <div class="container">
 
 	<table class="table table-stripe">
 		<tr>
 	  <th>#</th>
 	  <th>matricule</th>
 	  <th>nom</th>
 	  <th>prenom</th>
 	   <th></th>
 	   </tr>
        @foreach ($eleve as $v)
       <tr>
       	<th>#</th>
        <th>{{$v->matricule}}</th>
         <th>{{$v->nom}}</th>
          <th>{{$v->prenom}}</th>
          <th><p><a href="{{route('eleves_edit',['id'=>$v->id])}}">Modifier</a></p></th>
        </tr>
 
        @endforeach
       
        </table>
</div>

 @endsection
