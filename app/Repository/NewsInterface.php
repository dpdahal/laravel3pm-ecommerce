<?php

namespace App\Repository;

interface NewsInterface
{

    public function getAll();

    public function insertData($data);


    public function getById($id);

    public function updateData($data, $id);

    public function deleteData($id);

}
