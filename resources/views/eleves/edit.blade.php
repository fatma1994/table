<form action="{{route('eleves_update',['id'=>$eleve->id])}}" method="post">
	@csrf
	@method('patch')
	<div class="row">
		<input type="text" name="matricule" class="form-control" value="{{$eleve->matricule}}">
		<input type="text" name="nom" class="form-control" value="{{$eleve->nom}}">
		<input type="text" name="prenom" class="form-control" value="{{$eleve->prenom}}">
	</div>
	<div class="row">
		<button class="btn btn-primary">Enregistrer</button>
	</div>

	