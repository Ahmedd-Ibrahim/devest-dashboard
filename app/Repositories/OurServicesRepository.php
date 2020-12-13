<?php

namespace App\Repositories;

use App\Models\OurServices;
use App\Repositories\BaseRepository;

/**
 * Class OurServicesRepository
 * @package App\Repositories
 * @version December 12, 2020, 5:50 pm UTC
*/

class OurServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'section_icon',
        'title',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OurServices::class;
    }
}
