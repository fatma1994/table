@if($errors->any())
	@foreach($errors->all() as error)
	   <div class="alert alert-danger">{{$error}}</div>
	@endforeach
@endif
<div class="container">
	<div><p><a href="{{route('eleves.index')}}",{{__('Enregistrement d\un eleve')}}></a></p></div>

		<form action="{{route(eleves.store)}}" method="post">
	@csrf
	<div>
		<input type="text" name="matricule" class="form-control">
	</div>
	<div>
		<input type="text" name="nom" class="form-control">
	</div>
	<div>
		<input type="text" name="prenom" class="form-control">
    </div>
	<div>
		<button class="btn btn-primary">Enregistrer</button>
	</div>
</form>
</div>