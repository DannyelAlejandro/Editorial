<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AutorRepository;
use Illuminate\Http\Request;
use Flash;

class AutorController extends AppBaseController
{
    /** @var AutorRepository $autorRepository*/
    private $autorRepository;

    public function __construct(AutorRepository $autorRepo)
    {
        $this->autorRepository = $autorRepo;
    }

    /**
     * Display a listing of the Autor.
     */
    public function index(Request $request)
    {
        $autors = $this->autorRepository->paginate(10);

        return view('autors.index')
            ->with('autors', $autors);
    }

    /**
     * Show the form for creating a new Autor.
     */
    public function create()
    {
        return view('autors.create');
    }

    /**
     * Store a newly created Autor in storage.
     */
    public function store(CreateAutorRequest $request)
    {
        $input = $request->all();

        $autor = $this->autorRepository->create($input);

        Flash::success('Autor saved successfully.');

        return redirect(route('autors.index'));
    }

    /**
     * Display the specified Autor.
     */
    public function show($id)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('autors.show')->with('autor', $autor);
    }

    /**
     * Show the form for editing the specified Autor.
     */
    public function edit($id)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('autors.edit')->with('autor', $autor);
    }

    /**
     * Update the specified Autor in storage.
     */
    public function update($id, UpdateAutorRequest $request)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        $autor = $this->autorRepository->update($request->all(), $id);

        Flash::success('Autor updated successfully.');

        return redirect(route('autors.index'));
    }

    /**
     * Remove the specified Autor from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        $this->autorRepository->delete($id);

        Flash::success('Autor deleted successfully.');

        return redirect(route('autors.index'));
    }
}
