<?php

namespace App\Repositories\BlogRepository;

use App\Models\Blog;

class BlogRepository implements IBlog
{
    public function getAllBlogs()
    {
        return Blog::orderBy('id', 'desc')->paginate(15);
    }

    public function store($request)
    {
        $blog = Blog::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return $blog;
    }
}
