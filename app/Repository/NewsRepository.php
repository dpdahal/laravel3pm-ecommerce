<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

class NewsRepository implements NewsInterface
{

    public function getAll()
    {
        $data = [
            'title' => 'News Title',
            'content' => 'News Content'
        ];

        return $data;
    }

    public function insertData($data)
    {
        $data['user_id']=Auth::user()->id;
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function updateData($data, $id)
    {
        // TODO: Implement updateData() method.
    }

    public function deleteData($id)
    {
        // TODO: Implement deleteData() method.
    }
}
