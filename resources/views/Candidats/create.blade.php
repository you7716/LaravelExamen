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
                <h4>Add New Candidat</h4>
            </div>
            <div class="float-end">
                <a class="btn btn-sm btn-warning" href="{{ route('candidats.index') }}"><i class="fa fa-chevron-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form method="post" action="{{ route('candidats.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold">Prenom</label>
                    <input type="text" class="form-control" placeholder="Enter Title" name="prenom" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Nom</label>
                    <input type="text" class="form-control" placeholder="Enter contenue" name="nom" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Age</label>
                    <input type="number" min="18" max="35" class="form-control" placeholder="Enter contenue" name="age" required>
                </div>


                <div class="mb-3">
                    <label class="form-label fw-bold">Niveau Etude</label>
                    <input type="text" class="form-control" placeholder="Enter contenue" name="niveauEtude" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control" placeholder="Enter contenue" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Sexe</label>
                         <select name="sexe">
						
							<option value="Masculin">Masculin
							</option>
							<option value="Feminin">Feminin
							</option>
						
                        </select>
                </div>
                <div class="mb-3">
                    <br>
                    <label class="form-label fw-bold">formations</label>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <select name="formations">
							<option>Faites choix
							</option>
							@foreach ($formations as $item)
								
							<option value="{{$item->id}}">{{$item->nom}}
							</option>
							@endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">duree</label>
                        <input type="number" class="form-control" placeholder="Enter Title" name="duree" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Description</label>
                        <textarea name="description" >

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Is started</label>
                       <select name="started">
						
							<option value="1">Faux
							</option>
							<option value="0">Vrai
							</option>
						
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">date Debut</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="dateDeb" required>
                    </div>
                    <br>
                    <label class="form-label fw-bold">Reference</label>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Reference</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="libelle" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Validated</label>
                       <select name="validated">
						
							<option value="1">Faux
							</option>
							<option value="0">Vrai
							</option>
						
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Horaire</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="horaire" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Type</label>
                        <select name="types">
							<option>Faites choix
							</option>
							@foreach ($types as $item)
								
							<option value="{{$item->id}}">{{$item->libelle}}
							</option>
							@endforeach
                        </select>
                    </div>
                    <button type="Save" class="btn btn-sm btn-success">
                        <i class="fa fa-floppy-o"></i> Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection
