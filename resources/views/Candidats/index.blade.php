@extends('layout.web-layout')

@section('content')

<div class="row my-4">
	<div class="col-lg-2 mx-auto p-1" style="background-color: #1f386a;">
	  	<a href="https://www.buildwithphp.com/">
	  		<img src="https://www.buildwithphp.com/front/images/logo.webp" class="img-fluid">
	  	</a>
	</div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 my-4">
		<div class="float-start">
			<h4>Laravel 9 CRUD Application</h4>
		</div>
		<div class="float-end">
			<a class="btn btn-sm btn-success" href="{{ route('candidats.create') }}"><i class="fa fa-plus"></i> Add New Candidat</a>
		</div>
	</div>
	<div class="col-lg-2"></div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
         	{{ $message }}
         </div>
         @endif
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="table-secondary">
					<th>#</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Age</th>
					<th>Sexe</th>
					<th>Email</th>
					<th>NivEtude</th>
					<th>Infos</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($candidats as $candidat)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $candidat->nom }}</td>
					<td>{{ $candidat->prenom }}</td>
					<td>{{ $candidat->age }}</td>
					<td>{{ $candidat->sexe }}</td>
					<td>{{ $candidat->email }}</td>
					<td>{{ $candidat->niveauEtude }}</td>
					<td>
					<a class="btn btn-sm btn-outline-secondary" href="/candidats/{{$candidat->id}}">
							<i class="fa fa-eye"></i> View
						</a>
					</td>
					
					
						</form>
				</tr>
				@endforeach
			</tbody>
		</table>

		{!! $candidats->links() !!}

	</div>
	<div class="col-lg-2"></div>
</div>



















<div class="row">
    &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;  &emsp;
	    <div class="col-lg-8  bg-primary">
  <dl>
  <center>  <dt class="">Nombre de Candidat en fonctions Des Formations</dt> </center>
  </dl>     
</div>
</div>


<br>




<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
         	{{ $message }}
         </div>
         @endif
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="table-secondary">
					<th>Nom</th>
					<th>Nombre candidats</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($formations as $formation)
				<tr>
					<td>{{ $formation->nom }}</td>
					<td>{{ $formation->candidats->count() }}</td>
				
						</form>
				
				</tr>
				@endforeach
			</tbody>
		</table>

	

	</div>
	<div class="col-lg-2"></div>
</div>





<div class="row">
    &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;  &emsp;
	    <div class="col-lg-8  bg-primary">
  <dl>
  <center>  <dt class="">Nombre de Candidat en fonctions Des Sexes</dt> </center>
  </dl>     
</div>
</div>


<br>
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
         	{{ $message }}
         </div>
         @endif
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="table-secondary">
					<th>Masculin</th>
					<th>Feminin</th>
				</tr>
			</thead>
			<tbody>
			{{$cpt = 0}}
			{{$cpt2 = 0}}
				@foreach ($candidats as $candidat)
					 @if ($candidat->sexe =="Feminin")
					 {{ $cpt++}}
					 @else 
					 {{ $cpt2++}}
        			 @endif
				@endforeach
				<tr>
						<td>{{ $cpt2 }}</td>
						<td>{{ $cpt }}</td>
				</tr>
				
					
			</tbody>
		</table>

		{!! $candidats->links() !!}
						</form>

	</div>
	<div class="col-lg-2"></div>
</div>












<div class="row">
    &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;   &emsp;  &emsp;
	    <div class="col-lg-8  bg-primary">
  <dl>
  <center>  <dt class="">Nombre de formations en fonctions Des Referentiels</dt> </center>
  </dl>     
</div>
</div>


<br>
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
         	{{ $message }}
         </div>
         @endif
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="table-secondary">
					<th>Reference</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($references as $candidat)
				<tr>
						<td>{{ $candidat->libelle }}</td>			
		
				</tr>
				@endforeach
				
					
			</tbody>
		</table>

		{!! $candidats->links() !!}
						</form>

	</div>
	<div class="col-lg-2"></div>
</div>

















@endsection