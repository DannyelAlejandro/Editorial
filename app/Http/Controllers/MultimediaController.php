<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMultimediaRequest;
use App\Http\Requests\UpdateMultimediaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MultimediaRepository;
use Illuminate\Http\Request;
use Flash;

class MultimediaController extends AppBaseController
{
    /** @var MultimediaRepository $multimediaRepository*/
    private $multimediaRepository;

    public function __construct(MultimediaRepository $multimediaRepo)
    {
        $this->multimediaRepository = $multimediaRepo;
    }

    /**
     * Display a listing of the Multimedia.
     */
    public function index(Request $request)
    {
        $multimedia = $this->multimediaRepository->paginate(10);

        return view('multimedia.index')
            ->with('multimedia', $multimedia);
    }

    /**
     * Show the form for creating a new Multimedia.
     */
    public function create()
    {
        return view('multimedia.create');
    }

    /**
     * Store a newly created Multimedia in storage.
     */
    public function store(CreateMultimediaRequest $request)
    {
        $input = $request->all();

        $multimedia = $this->multimediaRepository->create($input);

        Flash::success('Multimedia saved successfully.');

        return redirect(route('multimedia.index'));
    }

    /**
     * Display the specified Multimedia.
     */
    public function show($id)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        return view('multimedia.show')->with('multimedia', $multimedia);
    }

    /**
     * Show the form for editing the specified Multimedia.
     */
    public function edit($id)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        return view('multimedia.edit')->with('multimedia', $multimedia);
    }

    /**
     * Update the specified Multimedia in storage.
     */
    public function update($id, UpdateMultimediaRequest $request)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        $multimedia = $this->multimediaRepository->update($request->all(), $id);

        Flash::success('Multimedia updated successfully.');

        return redirect(route('multimedia.index'));
    }

    /**
     * Remove the specified Multimedia from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        $this->multimediaRepository->delete($id);

        Flash::success('Multimedia deleted successfully.');

        return redirect(route('multimedia.index'));
    }
}
