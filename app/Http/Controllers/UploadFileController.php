<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller {
  
   public function showUploadFile(Request $request){
      $file = $request->file('image');

      //Display File Name
      {{'File Name: '.$file->getClientOriginalName()}}
      {{ <br> }}

      //Display File Extension
      {{'File Extension: '.$file->getClientOriginalExtension()}}
      {{<br>}}

      //Display File Real Path
      {{'File Real Path: '.$file->getRealPath()}}
      {{<br>}}

      //Display File Size
      {{'File Size: '.$file->getSize()}}
      {{<br>}}

      //Display File Mime Type
      {{'File Mime Type: '.$file->getMimeType();}}

      //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
   }
}
