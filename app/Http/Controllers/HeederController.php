<?php

namespace App\Http\Controllers;

use App\DataTables\HeederDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateHeederRequest;
use App\Http\Requests\UpdateHeederRequest;
use App\Repositories\HeederRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class HeederController extends AppBaseController
{
    /** @var  HeederRepository */
    private $heederRepository;

    public function __construct(HeederRepository $heederRepo)
    {
        $this->heederRepository = $heederRepo;
    }

    /**
     * Display a listing of the Heeder.
     *
     * @param HeederDataTable $heederDataTable
     * @return Response
     */
    public function index(HeederDataTable $heederDataTable)
    {
        return $heederDataTable->render('heeders.index');
    }

    /**
     * Show the form for creating a new Heeder.
     *
     * @return Response
     */
    public function create()
    {
        return view('heeders.create');
    }

    /**
     * Store a newly created Heeder in storage.
     *
     * @param CreateHeederRequest $request
     *
     * @return Response
     */
    public function store(CreateHeederRequest $request)
    {
        $input = $request->all();

        $heeder = $this->heederRepository->create($input);

        Flash::success('Heeder saved successfully.');

        return redirect(route('heeders.index'));
    }

    /**
     * Display the specified Heeder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $heeder = $this->heederRepository->find($id);

        if (empty($heeder)) {
            Flash::error('Heeder not found');

            return redirect(route('heeders.index'));
        }

        return view('heeders.show')->with('heeder', $heeder);
    }

    /**
     * Show the form for editing the specified Heeder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $heeder = $this->heederRepository->find($id);

        if (empty($heeder)) {
            Flash::error('Heeder not found');

            return redirect(route('heeders.index'));
        }

        return view('heeders.edit')->with('heeder', $heeder);
    }

    /**
     * Update the specified Heeder in storage.
     *
     * @param  int              $id
     * @param UpdateHeederRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHeederRequest $request)
    {
        $heeder = $this->heederRepository->find($id);

        if (empty($heeder)) {
            Flash::error('Heeder not found');

            return redirect(route('heeders.index'));
        }

        $heeder = $this->heederRepository->update($request->all(), $id);

        Flash::success('Heeder updated successfully.');

        return redirect(route('heeders.index'));
    }

    /**
     * Remove the specified Heeder from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $heeder = $this->heederRepository->find($id);

        if (empty($heeder)) {
            Flash::error('Heeder not found');

            return redirect(route('heeders.index'));
        }

        $this->heederRepository->delete($id);

        Flash::success('Heeder deleted successfully.');

        return redirect(route('heeders.index'));
    }
}
