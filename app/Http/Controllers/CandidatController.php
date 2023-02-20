<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\CandForm;
use App\Models\FormationRef;
use App\Models\Type;
use Khill\Lavacharts\Lavacharts;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $formations = Formation::all();
        $types = Type::all();
        $references = Referentiel::all();
        $references_id = FormationRef::all();
        $candidats = Candidat::latest()->simplePaginate(5);
        return view('candidats.index', compact('candidats','types','references','formations','references_id'))
        ->with('i', (request()->input('page', 1) - 1) * 5);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations = Formation::all();
        $types = Type::all();
        return view('candidats.create',compact('formations','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Candidat = Candidat::create($request->all());

        $Candidat->formations()->attach([
            $request->formations=>[
                'duree'=>$request->duree,
                'description'=>$request->description,
                'started'=>$request->started,
                'dateDeb'=>$request->dateDeb
            ]]);

        $references =Referentiel::create([
            'libelle'=>$request->libelle,
            'validated'=>$request->validated,
            'horaire'=>$request->horaire,
            'type_id'=>$request->types
        ]);


        $references->formations()->attach($request->formations);

        return redirect('candidats')
        ->with('success','Record Created successfully.');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidat = Candidat::find($id);
        $formations = Formation::all();
        $types = Type::all();
        $references = Referentiel::all();
        return view('candidats.show',compact('candidat','types','references','formations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }






    public function store_forms(Request $request)
    {
        $candidat = new Candidat();

        $candidat->formations()->attach([
            $request->formations=>[
                'duree'=>$request->duree,
                'description'=>$request->description,
                'started'=>$request->started,
                'dateDeb'=>$request->dateDeb,
                'candidat_id'=>$request->candidat_id
            ]]);

        $references =Referentiel::create([
            'libelle'=>$request->libelle,
            'validated'=>$request->validated,
            'horaire'=>$request->horaire,
            'type_id'=>$request->types
        ]);


        $references->formations()->attach($request->formations);
        
        return redirect('candidats')
        ->with('success','Record Created successfully.');

    }

}
