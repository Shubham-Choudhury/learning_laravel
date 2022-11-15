<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function index()
    {
        return view('file_upload.index');
    }

    public function upload(Request $request)
    {
        // Upload single file with validation
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $file = $request->file('file');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $file_name);

        session()->put('file_name', $file_name);
        // redirect to download page
        return redirect()->route('download_file');
    }

    public function download()
    {
        // This route can be accessed only if file is uploaded
        if (session()->has('file_name')) {
            $file_name = session()->get('file_name');
            $data = compact('file_name');
            return view('file_upload.download', $data);
        }
        return view('file_upload.index');
    }
}
