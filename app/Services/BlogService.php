<?php
namespace App\Services;

use App\Repositories\BlogRepository\IBlog;

class BlogService
{
    public function __construct(public IBlog $repository)
    {
    }
    public function getAllBlogs()
    {
        $blogs = $this->repository->getAllBlogs();
        return $blogs;
    }

    public function store($request)
    {
        $blog = $this->repository->store($request);
        return $blog;
    }

    public function delete($id)
    {
        $blog = $this->repository->delete($id);
        return $blog;
    }
}
