<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 16/01/2018
 * Time: 09:27
 */

namespace App\Repositories;


interface UserRepositoryInterface
{
    public function getBlankModel();
    public function index();
    public function show($id);
    public function store($data);
    public function update($data,$id);
    public function delete($id);
}