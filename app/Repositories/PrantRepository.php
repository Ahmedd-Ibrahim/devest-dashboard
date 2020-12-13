<?php

namespace App\Repositories;

use App\Models\Prant;
use App\Repositories\BaseRepository;

/**
 * Class PrantRepository
 * @package App\Repositories
 * @version December 12, 2020, 8:21 pm UTC
*/

class PrantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'photo'
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
        return Prant::class;
    }

    public function create($input)
    {
        if(is_file($input['photo']))
        {
            $photo =   UploadImage('prants',$input['photo']);
            $input['photo'] = $photo;
        }

        $model = $this->model->newInstance($input);

        $model->save();

        return $model;
    }

    public function update($input, $id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        if($model->photo)
        {
            RemoveImageFromDisk($model->photo);
        }
        if(is_file($input['photo']))
        {
            $photo =   UploadImage('prants',$input['photo']);
            $input['photo'] = $photo;
        }

        $model->fill($input);

        $model->save();

        return $model;
    }


    public function delete($id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        if($model->photo)
        {
            RemoveImageFromDisk($model->photo);
        }

        return $model->delete();
    }
}
