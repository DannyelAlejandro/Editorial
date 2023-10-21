<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTiposRequest;
use App\Http\Requests\UpdateTiposRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TiposRepository;
use Illuminate\Http\Request;
use Flash;

class TiposController extends AppBaseController
{
    /** @var TiposRepository $tiposRepository*/
    private $tiposRepository;

    public function __construct(TiposRepository $tiposRepo)
    {
        $this->tiposRepository = $tiposRepo;
    }

    /**
     * Display a listing of the Tipos.
     */
    public function index(Request $request)
    {
        $tipos = $this->tiposRepository->paginate(10);

        return view('tipos.index')
            ->with('tipos', $tipos);
    }

    /**
     * Show the form for creating a new Tipos.
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created Tipos in storage.
     */
    public function store(CreateTiposRequest $request)
    {
        $input = $request->all();

        $tipos = $this->tiposRepository->create($input);

        Flash::success('Tipos saved successfully.');

        return redirect(route('tipos.index'));
    }

    /**
     * Display the specified Tipos.
     */
    public function show($id)
    {
        $tipos = $this->tiposRepository->find($id);

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        return view('tipos.show')->with('tipos', $tipos);
    }

    /**
     * Show the form for editing the specified Tipos.
     */
    public function edit($id)
    {
        $tipos = $this->tiposRepository->find($id);

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        return view('tipos.edit')->with('tipos', $tipos);
    }

    /**
     * Update the specified Tipos in storage.
     */
    public function update($id, UpdateTiposRequest $request)
    {
        $tipos = $this->tiposRepository->find($id);

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        $tipos = $this->tiposRepository->update($request->all(), $id);

        Flash::success('Tipos updated successfully.');

        return redirect(route('tipos.index'));
    }

    /**
     * Remove the specified Tipos from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipos = $this->tiposRepository->find($id);

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        $this->tiposRepository->delete($id);

        Flash::success('Tipos deleted successfully.');

        return redirect(route('tipos.index'));
    }
}
