<?php
use HireMe\Entities\Catalog;
use HireMe\Entities\Group;
use HireMe\Components\FieldBuilder;
use HireMe\Managers\CatalogsManagers;
use HireMe\Managers\GruposManagers;
use HireMe\Repositories\CatalogRepo;
use HireMe\Repositories\GroupRepo;
class CatalogsController extends \BaseController {
    
    protected $catalogoRepo;
    protected $grupoRepo;

    public function __construct(CatalogRepo $catalogoRepo, GroupRepo $grupoRepo) {
        $this->CatalogoRepo = $catalogoRepo;
        $this->GrupoRepo = $grupoRepo;
    }

    /**
     * @author Anwar Sarmiento
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $resultado = Catalog::paginate(15); 
        return View::make('catalogs/index', compact('resultado'));
    }

    /**
     * @author Anwar Sarmiento
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {       
        $grupo = Grupo::lists('nombre', 'id');     
        $form_data = array('route' => 'catalogos.store', 'method' => 'POST');
        $action = 'Agregar';
        $catalogo = array();
        return View::make('catalogs.create', compact('grupo', 'catalogo', 'form_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
       
        $catalogo = $this->CatalogoRepo->newCatalogo();
        $manager = new CatalogosManagers($catalogo, Input::all());
        $manager->save();
        $resultado = Catalogo::paginate(15);
        return View::make('catalogs.index', compact('resultado'))->with(['message' => '']);
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
         $catalogo = Catalogo::find($id);
        if (is_null($catalogo)) {
            App::abort(404);
        }
        $grupo = Grupo::lists('nombre', 'id');
        $form_data = array('route' => array('catalogos.update', $catalogo->id), 'method' => 'PATCH');
        $action = 'Editar';
        return View::make('catalogs/create', compact('catalogo', 'form_data', 'action','grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $catalogo = Catalogo::find($id);
        $manager = new CatalogosManagers($catalogo, Input::all());
        $manager->save();
        $resultado = Catalogo::paginate(15);
        return View::make('catalogs.index', compact('resultado'))->with(['message' => '']);
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
