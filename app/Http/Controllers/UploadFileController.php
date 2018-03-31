<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FileEntry;
use Illuminate\Support\Facades\Response;

use App\File;

class UploadFileController extends Controller {
  public function index(){
    $entries = File::all();

    return view('order.create', compact('entries'));
  }

  public function add(){
    $file = Request::file('job_sample');
    $extension = $file->getClientOriginalExtension();

    Storage::disk('local')->put($file->getFileName().'.'.$extension, File::get($file));

    $entry = new File();

    $entry->mime_type = $file->getClientMimeType();
    $entry->name = $file->getFileName().'.'.$extension;

    $entry->save();
  }

  public function get($filename){
    $entry = File::where('name', '=', $filename)->findOrFail();
    $file = Storage::disk('local')->get($entry->name);

    return(new Response($file, 200))->header('Content-Type', $entry->mime_type);

  }
}
