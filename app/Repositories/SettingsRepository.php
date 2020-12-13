<?php

namespace App\Repositories;

use App\Models\Settings;
use App\Repositories\BaseRepository;

/**
 * Class SettingsRepository
 * @package App\Repositories
 * @version December 12, 2020, 8:50 pm UTC
*/

class SettingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'facebook_link',
        'twitter_link',
        'insta_link',
        'Email',
        'phone',
        'Description_on_footer'
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
        return Settings::class;
    }
}
