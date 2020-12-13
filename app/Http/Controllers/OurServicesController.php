<?php

namespace App\Http\Controllers;

use App\DataTables\OurServicesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOurServicesRequest;
use App\Http\Requests\UpdateOurServicesRequest;
use App\Repositories\OurServicesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OurServicesController extends AppBaseController
{
    /** @var  OurServicesRepository */
    private $ourServicesRepository;

    public function __construct(OurServicesRepository $ourServicesRepo)
    {
        $this->ourServicesRepository = $ourServicesRepo;
    }

    /**
     * Display a listing of the OurServices.
     *
     * @param OurServicesDataTable $ourServicesDataTable
     * @return Response
     */
    public function index(OurServicesDataTable $ourServicesDataTable)
    {
        return $ourServicesDataTable->render('our_services.index');
    }

    /**
     * Show the form for creating a new OurServices.
     *
     * @return Response
     */
    public function create()
    {
        return view('our_services.create');
    }

    /**
     * Store a newly created OurServices in storage.
     *
     * @param CreateOurServicesRequest $request
     *
     * @return Response
     */
    public function store(CreateOurServicesRequest $request)
    {
        $input = $request->all();

        $ourServices = $this->ourServicesRepository->create($input);

        Flash::success('Our Services saved successfully.');

        return redirect(route('ourServices.index'));
    }

    /**
     * Display the specified OurServices.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ourServices = $this->ourServicesRepository->find($id);

        if (empty($ourServices)) {
            Flash::error('Our Services not found');

            return redirect(route('ourServices.index'));
        }

        return view('our_services.show')->with('ourServices', $ourServices);
    }

    /**
     * Show the form for editing the specified OurServices.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ourServices = $this->ourServicesRepository->find($id);

        if (empty($ourServices)) {
            Flash::error('Our Services not found');

            return redirect(route('ourServices.index'));
        }

        return view('our_services.edit')->with('ourServices', $ourServices);
    }

    /**
     * Update the specified OurServices in storage.
     *
     * @param  int              $id
     * @param UpdateOurServicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOurServicesRequest $request)
    {
        $ourServices = $this->ourServicesRepository->find($id);

        if (empty($ourServices)) {
            Flash::error('Our Services not found');

            return redirect(route('ourServices.index'));
        }

        $ourServices = $this->ourServicesRepository->update($request->all(), $id);

        Flash::success('Our Services updated successfully.');

        return redirect(route('ourServices.index'));
    }

    /**
     * Remove the specified OurServices from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ourServices = $this->ourServicesRepository->find($id);

        if (empty($ourServices)) {
            Flash::error('Our Services not found');

            return redirect(route('ourServices.index'));
        }

        $this->ourServicesRepository->delete($id);

        Flash::success('Our Services deleted successfully.');

        return redirect(route('ourServices.index'));
    }
}
