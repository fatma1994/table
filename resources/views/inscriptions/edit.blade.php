<form action="{{route('inscriptions_update',['id'=>$inscription->id])}}" method="post">
	@csrf
	@method('patch')
	<div class="row">
		<input type="text" name="date_inscrit" class="form-control" value="{{$inscription->date_inscrit}}">
		<input type="text" name="frais_inscription" class="form-control" value="{{$inscription->frais_inscription}}">
		<input type="text" name="annee_academique" class="form-control" value="{{$inscription->annee_academique}}">
	</div>
	<div class="row">
		<button class="btn btn-primary">Enregistrer</button>
	</div>