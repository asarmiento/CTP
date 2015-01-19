<?php

use HireMe\Entities\TipoPresupuestos;
use HireMe\Components\FieldBuilder;
use HireMe\Managers\TipoPresupuestoManagers;
use HireMe\Repositories\TipoPresupuestosRepo;

class BudgetsTypesController extends \BaseController {
    protected $tipoPresupuestosRepo;
    public function __construct(TipoPresupuestosRepo $TipoPresupuestosRepo) {
        $this->TipoPresupuestosRepo = $TipoPresupuestosRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $resultado = TipoPresupuestos::paginate(15);
        return View::make('tpresupuestos.index', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $form_data = array('route' => 'tpresupuestos.store', 'method' => 'POST');
        $action = 'Agregar';
        $tpresupuesto = array();
        return View::make('tpresupuestos.form', compact('tpresupuesto',  'form_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $TipoPresupuestos = $this->TipoPresupuestosRepo->newTipoPresupuesto();
        $manager = new TipoPresupuestoManagers($TipoPresupuestos, Input::all());
        $manager->save();
        $resultado = TipoPresupuestos::paginate(15);
        return View::make('tpresupuestos.index', compact('resultado'))->with(['message' => '']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $tpresupuesto = TipoPresupuestos::find($id);
        if (is_null($tpresupuesto)) {
            App::abort(404);
        }
        $form_data = array('route' => array('tpresupuestos.update', $tpresupuesto->id), 'method' => 'PATCH');
        $action = 'Editar';
        return View::make('tpresupuestos/form', compact('tpresupuesto', 'form_data', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $TipoPresupuestos = TipoPresupuestos::find($id);
        $manager = new TipoPresupuestoManagers($TipoPresupuestos, Input::all());
        $manager->save();
        $resultado = TipoPresupuestos::paginate(15);
        return View::make('tpresupuestos.index', compact('resultado'))->with(['message' => '']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
