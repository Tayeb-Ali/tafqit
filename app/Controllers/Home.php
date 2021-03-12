<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

//
    public function home()
    {
        return view('home', ['title' => 'الرئيسبة']);
    }

    public function tafqit()
    {
        if (!$this->validate([
            'number' => 'required|integer|min_length[1]'
        ])) {
            return view('home', [
                'errors' => $this->validator->getErrors()
            ]);
        } else {
            $number = $this->request->getPost('number');
            return view('result', [
                'title' => "العدد :" . $this->request->getPost('number'),
                'number' => $this->request->getPost('number')]);
        }
    }
}
