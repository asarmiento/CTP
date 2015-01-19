<?php


class BudgetsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $resultado = Budget::paginate(15);
        return View::make('budgets.index', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $form_data = array('route' => 'presupuestos.store', 'method' => 'POST');
        $action = 'Agregar';
        $presupuesto = array();
        return View::make('presupuestos.form', compact('presupuesto', 'form_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $Presupuestos = $this->PresupuestoRepo->newPresupuesto();
        $manager = new PresupuestoManagers($Presupuestos, Input::all());
        $manager->save();
        $resultado = Presupuesto::paginate(15);
        return View::make('presupuestos.index', compact('resultado'))->with(['message' => '']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
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
