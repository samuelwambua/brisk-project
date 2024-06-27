<?php

namespace App\Controllers;

use App\Models\Crud;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function blog()
    {
        return view('blog');
    }

    public function create()
    {
        return view('create');
    } 

    public function store()
    {
        $article = new crud();
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content')
        ];
        $article->save($data);
        return redirect('blog');
       }
}

