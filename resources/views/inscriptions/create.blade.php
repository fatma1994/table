<div>
	<select name="eleve_id" id="eleve_id"
	class="form-control">
	<option value=""></option>
	@foreach(@eleve as $key=>$value)
	<option value="{{$key}}"{{$key==$inscription->eleve_id? 'selected="selected"':"}}>{{$value}}</option>
	@endforeach
</select>
</div>
@if($errors->any())
	@foreach($errors->all() as error)
	   <div class="alert alert-danger">{{$error}}</div>
	@endforeach
@endif
<div class="container">
	<div><p><a href="{{route('inscriptions.index')}}",{{__('Enregistrement d\inscription')}}></a></p></div>

		<form action="{{route(inscriptions.store)}}" method="post">
	@csrf
	<div>
		<input type="text" name="date_inscrit" class="form-control">
	</div>
	<div>
		<input type="text" name="frais_inscription" class="form-control">
	</div>
	<div>
		<input type="text" name="annee_academique" class="form-control">
    </div>
	<div>
		<button class="btn btn-primary">Enregistrer</button>
	</div>
</form>
</div>