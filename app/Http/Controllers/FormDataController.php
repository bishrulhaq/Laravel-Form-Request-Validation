<?php
namespace App\Http\Controllers;

use App\FormData;
use App\Http\Requests\FormDataRequest;

class FormDataController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function save(FormDataRequest $request)
    {
        $validatedData = $request->validated();
        FormData::create($validatedData);

        return redirect()->back()->with('success', 'The Form Data is successfully inserted to the Database!');
    }

}