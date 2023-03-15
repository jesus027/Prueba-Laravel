<?php

namespace App\Http\Controllers;
use App\Models\File;
use Storage;

use Illuminate\Http\Request;

class FileController extends Controller
{

    public function store(Request $request) {
        $request->validate([
            'file' => 'required|mimes:pdf|max:3048',
        ]);

        $uploadedFile = $request->file('file');
        $filename = time() . $uploadedFile->getClientOriginalName();

        Storage::allFiles('files/' . $filename, $uploadedFile, $filename);

        $upload = new File();
        $upload->filename = $filename;
        $upload->save();

        return back()->with('success', 'Él Archivo se subio de modo satisfactorio');
    }
}
