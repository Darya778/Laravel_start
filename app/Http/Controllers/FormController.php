<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
}
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'timestamp' => now(),
        ];

        $fileName = uniqid('data_') . '.json';
        Storage::disk('local')->put("data/$fileName", json_encode($data));

        return redirect('/form')->with('success', 'Данные успешно сохранены!');
    }

    public function listData()
    {
        $files = Storage::disk('local')->files('data');
        $dataList = array_map(function ($file) {
            return json_decode(Storage::disk('local')->get($file), true);
        }, $files);

        return view('data', ['dataList' => $dataList]);
    }
}
