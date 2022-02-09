<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;

class BlogController
{
    /**
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('blog');
    }
}
