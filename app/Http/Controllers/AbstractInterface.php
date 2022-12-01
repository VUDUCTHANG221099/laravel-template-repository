<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface AbstractInterface
{
    public function index();
    public function getByIdFirst($id);
    public function deleteByIdFirst($id);
    public function insertOne(Request $request);
    public function insertView();
    public function updateOne($id, Request $request);
    public function updateView($id);

}
