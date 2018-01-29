<?php
/**
 * Created by PhpStorm.
 * User: rizmoo
 * Date: 1/28/2018
 * Time: 1:53 AM
 */

namespace App\customs;


use App\File;
use Illuminate\Support\Facades\Storage;

class upload
{
  public  function File_upload($file)
  {
      $extension = $file->getClientOriginalExtension();
      Storage::disk('local')->put($file->getClientOriginalName(),  File::get($file));
  }
}