<?php

namespace App\Http\Controllers;

use App\DataTables\InFoAboutCompanyDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInFoAboutCompanyRequest;
use App\Http\Requests\UpdateInFoAboutCompanyRequest;
use App\Repositories\InFoAboutCompanyRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InFoAboutCompanyController extends AppBaseController
{
    /** @var  InFoAboutCompanyRepository */
    private $inFoAboutCompanyRepository;

    public function __construct(InFoAboutCompanyRepository $inFoAboutCompanyRepo)
    {
        $this->inFoAboutCompanyRepository = $inFoAboutCompanyRepo;
    }

    /**
     * Display a listing of the InFoAboutCompany.
     *
     * @param InFoAboutCompanyDataTable $inFoAboutCompanyDataTable
     * @return Response
     */
    public function index(InFoAboutCompanyDataTable $inFoAboutCompanyDataTable)
    {
        return $inFoAboutCompanyDataTable->render('in_fo_about_companies.index');
    }

    /**
     * Show the form for creating a new InFoAboutCompany.
     *
     * @return Response
     */
    public function create()
    {
        return view('in_fo_about_companies.create');
    }

    /**
     * Store a newly created InFoAboutCompany in storage.
     *
     * @param CreateInFoAboutCompanyRequest $request
     *
     * @return Response
     */
    public function store(CreateInFoAboutCompanyRequest $request)
    {
        $input = $request->all();

        $inFoAboutCompany = $this->inFoAboutCompanyRepository->create($input);

        Flash::success('In Fo About Company saved successfully.');

        return redirect(route('inFoAboutCompanies.index'));
    }

    /**
     * Display the specified InFoAboutCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inFoAboutCompany = $this->inFoAboutCompanyRepository->find($id);

        if (empty($inFoAboutCompany)) {
            Flash::error('In Fo About Company not found');

            return redirect(route('inFoAboutCompanies.index'));
        }

        return view('in_fo_about_companies.show')->with('inFoAboutCompany', $inFoAboutCompany);
    }

    /**
     * Show the form for editing the specified InFoAboutCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inFoAboutCompany = $this->inFoAboutCompanyRepository->find($id);

        if (empty($inFoAboutCompany)) {
            Flash::error('In Fo About Company not found');

            return redirect(route('inFoAboutCompanies.index'));
        }

        return view('in_fo_about_companies.edit')->with('inFoAboutCompany', $inFoAboutCompany);
    }

    /**
     * Update the specified InFoAboutCompany in storage.
     *
     * @param  int              $id
     * @param UpdateInFoAboutCompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInFoAboutCompanyRequest $request)
    {
        $inFoAboutCompany = $this->inFoAboutCompanyRepository->find($id);

        if (empty($inFoAboutCompany)) {
            Flash::error('In Fo About Company not found');

            return redirect(route('inFoAboutCompanies.index'));
        }

        $inFoAboutCompany = $this->inFoAboutCompanyRepository->update($request->all(), $id);

        Flash::success('In Fo About Company updated successfully.');

        return redirect(route('inFoAboutCompanies.index'));
    }

    /**
     * Remove the specified InFoAboutCompany from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inFoAboutCompany = $this->inFoAboutCompanyRepository->find($id);

        if (empty($inFoAboutCompany)) {
            Flash::error('In Fo About Company not found');

            return redirect(route('inFoAboutCompanies.index'));
        }

        $this->inFoAboutCompanyRepository->delete($id);

        Flash::success('In Fo About Company deleted successfully.');

        return redirect(route('inFoAboutCompanies.index'));
    }
}
