<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FAQController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $faqs = Faq::all();

        return view('faq', [
            'faqs' => $faqs
        ]);
    }
}
