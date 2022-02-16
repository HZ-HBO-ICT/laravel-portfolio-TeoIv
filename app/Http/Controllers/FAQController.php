<?php

namespace App\Http\Controllers;

use App\Models\Article;
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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('createfaq');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    /**
     * @return void
     */
    public function edit()
    {

    }

    /**
     * @return void
     */
    public function update()
    {

    }

    /**
     * @return void
     */
    public function delete()
    {

    }

}
