<?php
namespace App\Repositories\BlogRepository;

interface IBlog
{
    public function getAllBlogs();
    public function store($request);
    public function delete($id);
}
