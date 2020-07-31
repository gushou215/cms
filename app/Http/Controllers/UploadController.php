<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Methods\Functions;

class UploadController extends Controller {
    public function make( Request $request ) {

        $file = $this->move( $request->file( 'file' ) );
        return[
            'code'=>0,
            'file'=> $file
        ];
    }

    public function simditor( Request $request ) {

        $file = $this->move( $request->file( 'file' ) );
        return[
            'success'=>true,
            'msg' => '上传成功',
            'file_path'=> $file
        ];
    }

    protected function move( $file ) {
        $filename = Functions::str_rand( 5 ).'.'.$file->getClientOriginalExtension();
        $dir = 'uploads/'.date( 'Ymd' );
        $file->move( $dir, $filename );
        return url( $dir.'/'.$filename );
    }
}
