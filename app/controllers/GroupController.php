<?php
use HireMe\Entities\Group;
use HireMe\Managers\GroupsManagers;
use HireMe\Managers\GroupsUpdateManagers;
use HireMe\Repositories\GroupRepo;
use \HireMe\Components\FieldBuilder;

class GroupsController extends \BaseController {

    protected $grupoRepo;

    public function __construct(GrupoRepo $grupoRepo) {
        $this->grupoRepo = $grupoRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $resultado = Grupo::paginate(15);
        return View::make('grupos/index', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $form_data = array('route' => 'grupos.store', 'method' => 'POST');
        $action = 'Crear';
        $grupos=array();
        return View::make('grupos/create', compact('grupos', 'form_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $grupo = $this->grupoRepo->newGrupo();
        $manager = new GruposManagers($grupo, Input::all());

        $manager->save();
         $resultado = Grupo::paginate(15);
        return View::make('grupos/index', compact('resultado'))->with(['message' => '']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $grupos = Grupo::find($id);
        return View::make('grupos/edit', compact('grupos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $grupos = Grupo::find($id);
        if (is_null($grupos)) {
            App::abort(404);
        }
        $form_data = array('route' => array('grupos.update', $grupos->id), 'method' => 'PATCH');
        $action = 'Editar';
        return View::make('grupos/create', compact('grupos', 'form_data', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $grupos = Grupo::find($id);
        $manager = new GruposUpdateManagers($grupos, Input::all());
        $manager->save();
        $resultado = Grupo::paginate(15);
        return View::make('grupos/index', compact('resultado'));
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
