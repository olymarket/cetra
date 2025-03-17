<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB};

class BlogsController extends Controller
{
    public function index()
    {
    try {
        $posts = DB::select('CALL PublicBlogIndex');
        
        return response()->json([
            'statu'   => 'success',
            'message' => 'Success procedure',
            'posts'   => $posts
        ],200);
        }
        catch (Exception $e) {
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ],500);
        }
    }
    public function show($idPost){
        try{
            $id_Post = $idPost;
            $numeric = '/^[0-9]+$/';

            if(preg_match($numeric, $idPost)){

                $posts = DB::select('CALL PublicBlogShow(?)',[
                    $id_Post,
                ]);
                if($posts[0]->statu === 'success'){
                    return response()->json([
                        'statu'    => 'success',
                        'message'  => 'Success procedure',
                        'posts'    => $posts,
                    ],200);
                }
                else if($posts[0]->statu === 'error'){
                    return response()->json([
                        'statu'    => 'error',
                        'message'  => $posts,
                        'redirect' => url('/home')
                    ],500);
                }
            }
            else{
                return response()->json([
                    'statu'    => 'error',
                    'message'  => 'This option is not allowed',
                    'redirect' => url('/home')
                ],404);
            }  
        }
        catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Eror procedure',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}

