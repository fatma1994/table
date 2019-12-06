{{--@ if($errors->any())
	@ foreach($errors->all() as error)
	   <div class="alert alert-danger">{{$error}}</div>
	@ endforeach
@ endif--}}


<div class="container">
	<div><h1>{{__('Enregistrement d\un eleve')}}</1></div>

		<form action="" method="post">
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