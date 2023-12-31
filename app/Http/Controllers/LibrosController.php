<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibrosRequest;
use App\Http\Requests\UpdateLibrosRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Libros;
use App\Repositories\AutorRepository;
use App\Repositories\EditorialRepository;
use App\Repositories\LibrosRepository;
use App\Repositories\TiposRepository;
use Illuminate\Http\Request;
use Flash;

class LibrosController extends AppBaseController
{
    /** @var LibrosRepository $librosRepository*/
    private $librosRepository;
    private $auRepository;
    private $editorialsRepository;
    private $typesRepository;

    public function __construct(LibrosRepository $librosRepo, AutorRepository $auRepository, EditorialRepository $editorialRepository, TiposRepository $typesRepository)
    {
        $this->librosRepository = $librosRepo;
        $this->auRepository = $auRepository;
        $this->editorialsRepository = $editorialRepository;
        $this->typesRepository = $typesRepository;
    }

    /**
     * Display a listing of the Libros.
     */
    public function index(Request $request)
    {
        $libros = Libros::with(['aut', 'edi', 'tip'])->paginate(10);

        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new Libros.
     */
    public function create()
    {
        $authors = $this->auRepository->getAuthorsAgruped();
        $editorials = $this->editorialsRepository->getEditorialsAgruped();
        $types = $this->typesRepository->getTypesAgruped();

        //dd(auth()->user()->id);
        return view('libros.create', compact('authors', 'editorials', 'types'));
    }

    /**
     * Store a newly created Libros in storage.
     */
    public function store(CreateLibrosRequest $request)
    {
        $input = $request->all();

        $libros = $this->librosRepository->create($input);

        Flash::success('Libros saved successfully.');

        return redirect(route('libros.index'));
    }

    /**
     * Display the specified Libros.
     */
    public function show($id)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        return view('libros.show')->with('libros', $libros);
    }

    /**
     * Show the form for editing the specified Libros.
     */
    public function edit($id)
    {
        $libros = $this->librosRepository->find($id);
        $authors = $this->auRepository->getAuthorsAgruped();
        $editorials = $this->editorialsRepository->getEditorialsAgruped();
        $types = $this->typesRepository->getTypesAgruped();

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        return view('libros.edit', compact('authors', 'editorials', 'types'))->with('libros', $libros);
    }

    /**
     * Update the specified Libros in storage.
     */
    public function update($id, UpdateLibrosRequest $request)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        $libros = $this->librosRepository->update($request->all(), $id);

        Flash::success('Libros updated successfully.');

        return redirect(route('libros.index'));
    }

    /**
     * Remove the specified Libros from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        $this->librosRepository->delete($id);

        Flash::success('Libros deleted successfully.');

        return redirect(route('libros.index'));
    }
}
