<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class GdriveController extends Controller
{
    public function store()
    {
        return view('gdrive.store');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // max 10MB
        ]);

        $extension = $request->file('photo')->getClientOriginalExtension(); 
        $randomNumber = str_pad(mt_rand(1, 99999999999), 11, '0', STR_PAD_LEFT); 
        $fileName = 'DOC-' . $randomNumber . '.' . $extension; 

        $path = Storage::disk('google')->putFileAs('assets', $request->file('photo'), $fileName);
      
        return redirect('/')->with('success', 'Foto berhasil diunggah!')->with('path', $path);
    }

    public function stream()
    {
        $files = Gdrive::all('assets', true);
        return view('gdrive.stream', compact('files'));
    }

    public function streamByPath(Request $request)
    {
        $data = Gdrive::get($request->path);
        return response($data->file, 200)->header('Content-Type', $data->ext);
    }
}
