<?php
namespace App\Http\Controllers;

use App\Http\Requests\Create\BlogStoreRequest;
use App\Services\BlogService;

class BlogController extends Controller
{
    public function __construct(public BlogService $service)
    {
    }

    public function getBlogs()
    {
        $blogs = $this->service->getAllBlogs();
        return $blogs;
    }

    public function store(BlogStoreRequest $request)
    {
        $store = $this->service->store($request);
        dd($store);
    }

    public function delete($id)
    {
        $delete = $this->service->delete($id);
        dd($delete);
    }
}
