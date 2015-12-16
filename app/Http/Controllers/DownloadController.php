<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Response;

class DownloadController extends Controller {

    public function folderFile($folder, $file)
    {
        return Response::download(public_path().'/'.$folder.'/'.$file);
    }

}
