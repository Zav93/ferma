<?php

namespace App\Http\Controllers;

use App\Http\Requests\animals\StoreRequest;
use App\Http\Requests\animals\UpdateRequest;
use App\models\Animals;
use App\models\AnimalTypes;
use App\models\Measurement;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$animals = Animals::orderBy('id', 'desc')
			->take(10)
			->get();

        return view('animals.index', [
        	'animals' => $animals,
			'animalTypes' => AnimalTypes::all(),
			'measurements' => Measurement::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('animals.create', [
			'animalTypes' => AnimalTypes::all(),
			'measurements' => Measurement::all()
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
		$animals = new Animals();
		$animals->create($request->all());

		return redirect('animals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		return view('animals.edit', [
			'animal' => Animals::find($id),
			'animalTypes' => AnimalTypes::all(),
			'measurements' => Measurement::all()
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Animals $animal)
    {
		$animal->update($request->all());

		return redirect('animals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animals $animal)
    {
        $animal->delete();

        return back();
    }
}
