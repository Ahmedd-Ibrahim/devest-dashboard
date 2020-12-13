<?php

namespace App\Http\Controllers;

use App\DataTables\PrantDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePrantRequest;
use App\Http\Requests\UpdatePrantRequest;
use App\Repositories\PrantRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PrantController extends AppBaseController
{
    /** @var  PrantRepository */
    private $prantRepository;

    public function __construct(PrantRepository $prantRepo)
    {
        $this->prantRepository = $prantRepo;
    }

    /**
     * Display a listing of the Prant.
     *
     * @param PrantDataTable $prantDataTable
     * @return Response
     */
    public function index(PrantDataTable $prantDataTable)
    {
        return $prantDataTable->render('prants.index');
    }

    /**
     * Show the form for creating a new Prant.
     *
     * @return Response
     */
    public function create()
    {
        return view('prants.create');
    }

    /**
     * Store a newly created Prant in storage.
     *
     * @param CreatePrantRequest $request
     *
     * @return Response
     */
    public function store(CreatePrantRequest $request)
    {
        $input = $request->all();

        $prant = $this->prantRepository->create($input);

        Flash::success('Prant saved successfully.');

        return redirect(route('prants.index'));
    }

    /**
     * Display the specified Prant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prant = $this->prantRepository->find($id);

        if (empty($prant)) {
            Flash::error('Prant not found');

            return redirect(route('prants.index'));
        }

        return view('prants.show')->with('prant', $prant);
    }

    /**
     * Show the form for editing the specified Prant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prant = $this->prantRepository->find($id);

        if (empty($prant)) {
            Flash::error('Prant not found');

            return redirect(route('prants.index'));
        }

        return view('prants.edit')->with('prant', $prant);
    }

    /**
     * Update the specified Prant in storage.
     *
     * @param  int              $id
     * @param UpdatePrantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrantRequest $request)
    {
        $prant = $this->prantRepository->find($id);

        if (empty($prant)) {
            Flash::error('Prant not found');

            return redirect(route('prants.index'));
        }

        $prant = $this->prantRepository->update($request->all(), $id);

        Flash::success('Prant updated successfully.');

        return redirect(route('prants.index'));
    }

    /**
     * Remove the specified Prant from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prant = $this->prantRepository->find($id);

        if (empty($prant)) {
            Flash::error('Prant not found');

            return redirect(route('prants.index'));
        }

        $this->prantRepository->delete($id);

        Flash::success('Prant deleted successfully.');

        return redirect(route('prants.index'));
    }
}
