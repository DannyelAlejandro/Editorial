<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEditorialRequest;
use App\Http\Requests\UpdateEditorialRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EditorialRepository;
use Illuminate\Http\Request;
use Flash;

class EditorialController extends AppBaseController
{
    /** @var EditorialRepository $editorialRepository*/
    private $editorialRepository;

    public function __construct(EditorialRepository $editorialRepo)
    {
        $this->editorialRepository = $editorialRepo;
    }

    /**
     * Display a listing of the Editorial.
     */
    public function index(Request $request)
    {
        $editorials = $this->editorialRepository->paginate(10);

        return view('editorials.index')
            ->with('editorials', $editorials);
    }

    /**
     * Show the form for creating a new Editorial.
     */
    public function create()
    {
        return view('editorials.create');
    }

    /**
     * Store a newly created Editorial in storage.
     */
    public function store(CreateEditorialRequest $request)
    {
        $input = $request->all();

        $editorial = $this->editorialRepository->create($input);

        Flash::success('Editorial saved successfully.');

        return redirect(route('editorials.index'));
    }

    /**
     * Display the specified Editorial.
     */
    public function show($id)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        return view('editorials.show')->with('editorial', $editorial);
    }

    /**
     * Show the form for editing the specified Editorial.
     */
    public function edit($id)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        return view('editorials.edit')->with('editorial', $editorial);
    }

    /**
     * Update the specified Editorial in storage.
     */
    public function update($id, UpdateEditorialRequest $request)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        $editorial = $this->editorialRepository->update($request->all(), $id);

        Flash::success('Editorial updated successfully.');

        return redirect(route('editorials.index'));
    }

    /**
     * Remove the specified Editorial from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        $this->editorialRepository->delete($id);

        Flash::success('Editorial deleted successfully.');

        return redirect(route('editorials.index'));
    }
}
