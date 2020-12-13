<?php

namespace App\Repositories;

use App\Models\InFoAboutCompany;
use App\Repositories\BaseRepository;

/**
 * Class InFoAboutCompanyRepository
 * @package App\Repositories
 * @version December 12, 2020, 5:37 pm UTC
*/

class InFoAboutCompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sub_title',
        'title',
        'who_are_we_title',
        'description_who_are_we',
        'photo_who_are_we',
        'how_we_work_title',
        'description_how_we_work',
        'photo_how_we_work'
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
        return InFoAboutCompany::class;
    }

    public function create($input)
    {
        if(is_file($input['photo_who_are_we']))
        {
          $photo =   UploadImage('about',$input['photo_who_are_we']);
            $input['photo_who_are_we'] = $photo;
        }
        if(is_file($input['photo_how_we_work']))
        {
            $photo =   UploadImage('about',$input['photo_how_we_work']);
            $input['photo_how_we_work'] = $photo;
        }
        $model = $this->model->newInstance($input);

        $model->save();

        return $model;
    }


    public function update($input, $id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        if($model->photo_who_are_we)
        {
            RemoveImageFromDisk($model->photo_who_are_we);
        }

        if(is_file($input['photo_who_are_we']))
        {
            $photo =   UploadImage('about',$input['photo_who_are_we']);
            $input['photo_who_are_we'] = $photo;
        }


        if($model->photo_how_we_work)
        {
            RemoveImageFromDisk($model->photo_how_we_work);
        }

        if(is_file($input['photo_how_we_work']))
        {
            $photo2 =   UploadImage('about',$input['photo_how_we_work']);
            $input['photo_how_we_work'] = $photo2;
        }

        $model->fill($input);

        $model->save();

        return $model;
    }

    public function delete($id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        if($model->photo_how_we_work)
        {
            RemoveImageFromDisk($model->photo_how_we_work);
        }

        if($model->photo_who_are_we)
        {
            RemoveImageFromDisk($model->photo_who_are_we);
        }

        return $model->delete();
    }
}
