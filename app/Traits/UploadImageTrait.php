<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadImageTrait
{
    /**
     * $folderName is place to upload
    **/
    public function UploadImage(Request $request, $folderName)
    {
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs($folderName,$image,'photos');
        return $path;
    }
}
