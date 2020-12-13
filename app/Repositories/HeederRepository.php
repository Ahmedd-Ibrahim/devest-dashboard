<?php

namespace App\Repositories;

use App\Models\Heeder;
use App\Repositories\BaseRepository;

/**
 * Class HeederRepository
 * @package App\Repositories
 * @version December 12, 2020, 5:25 pm UTC
*/

class HeederRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Heeder::class;
    }
}
