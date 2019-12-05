@extends("index")

@section("contenu")
 <div class="container">
 
 	<table class="table table-stripe">
 		<div><p><a href="{{route('inscriptions_create')}}">{{('Enrengistrer d\un eleve')}}></a></p></div>
 		<tr>
 	  <th>#</th>
 	  <th>date_inscrit</th>
 	  <th>frais_inscriptio</th>
 	  <th>annee_academique</th>
 	   <th>Edit</th>
 	   </tr>
        @foreach ($inscription as $v)
       <tr>
       	<th>#</th>
        <th>{{$v->date_inscrit}}</th>
         <th>{{$v->frais_inscription}}</th>
          <th>{{$v->annee_academique}}</th>
          <th><p><a href="{{route('inscriptions_edit',['id'=>$v->id])}}">Modifier</a></p></th>
        </tr>
 
        @endforeach
       
        </table>
</div>

 @endsection