<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{DB, File};
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Exception;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        try{
            $posts    = DB::select('CALL AdminBlogIndex');
            return response()->json([
                'statu'   => 'success',
                'message' => 'Success procedure',
                'posts'   => $posts,
            ], 200);

        }catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    public function create()
    {
        try{
            $status     = DB::select('CALL AdminBlogStausIndex');
            $categories = DB::select('CALL AdminBlogCategoriesIndex');

            return response()->json([
                'statu'      => 'succes',
                'message'    => 'Success procedure',
                'status'     => $status,
                'categories' => $categories,
            ],200);

        }catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ],500);
        }

    }

    public function store(Request $request){
        try{

            $id_Statu    = $request->input('idStatu');
            $id_Categori = $request->input('idCategori');
            //$id_User     = $request->input('idUser');
            $id_User     = '1';
            //$id_User    = Auth::user()->idUser;
            $title       = e($request->input('title'));
            $slug        = Str::slug($title."-".Carbon::now()->format('Y-m-d H-i-s')."-".substr(Carbon::now()->format('u'), 0, 3));
            $description = e($request->input('description'));
            $content     = e($request->input('content'));
            $date        =  Carbon::now()->format('Y-m-d');
            $time        =  Carbon::now()->format('g:i:s');
            $image       = $request->input('image');
            if ($request->hasFile('image')) {
                $imageInput   = $request->file('image');
                $imageNew     = Carbon::now()->format('Y-m-d H-i-s')."-".substr(Carbon::now()->format('u'), 0, 3)."-".$imageInput->getClientOriginalName();
                $imageUrl     = 'storage/post/';
                $request->image->move($imageUrl, $imageNew);
                $image        = 'storage/post/' . $imageNew;
            }
            $posts   = DB::select('CALL AdminBlogStore(?,?,?,?,?,?,?,?,?,?)',[
                $id_Statu,
                $id_Categori,
                $id_User,
                $title,
                $slug,
                $image,
                $description,
                $content,
                $date,
                $time,
            ]);
            if($posts[0]->statu === 'error'){
                $rpa = $posts[0]->image;
                if(File::exists($rpa)){
                    File::delete($rpa);
                }
                return response()->json([
                    'statu'   => 'error',
                    'message' => $posts[0],
                ], 400);
            }    
            else if($posts[0]->statu === 'success'){
                return response()->json([
                    'statu'   => 'success',
                    'message' => $posts[0],
                ], 200);
            }        
        }catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ],500);
        }
    }

    public function edit($idPost)
    {
        try{
            $id_Post = $idPost;
            $numeric = '/^[0-9]+$/';

            if(preg_match($numeric, $idPost)){

                $status     = DB::select('CALL AdminBlogStausIndex');
                $categories = DB::select('CALL AdminBlogCategoriesIndex'); 
                $posts = DB::select('CALL AdminBlogEdit(?)',[
                    $id_Post,
                ]);

                if($posts[0]->statu === 'error'){
                    return response()->json([
                        'statu'      => 'error',
                        'message'    => 'This content is not available',
                        'redirect'   => url('/admin/blog-index')
                    ],404); 
                }
                else if($posts[0]->statu === 'success'){
                    return response()->json([
                        'statu'      => 'success',
                        'message'    => 'Success procedure',
                        'status'     => $status,
                        'categories' => $categories,
                        'posts'      => $posts[0],
                    ],200);
                }
            }
            else{
                return response()->json([
                    'statu'   => 'error',
                    'message' => 'This option is not allowed',
                    'redirect' => url('/admin/blog-index')
                ],500);
            }
        }catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ],500);
        }
    }

    public function update(Request $request, $idPost)
    {
        try{
            $id_Post = $idPost;
            $numeric = '/^[0-9]+$/';

            if(preg_match($numeric, $idPost)){

                $id_Statu    = $request->input('idStatu');
                $id_Categori = $request->input('idCategori');
                //$id_User     = $request->input('idUser');
                $id_User     = '1';
                //$id_User    = Auth::user()->idUser;
                $id_title    = e($request->input('title'));
                $slug        = Str::slug($id_title."-".Carbon::now()->format('Y-m-d H-i-s')."-".substr(Carbon::now()->format('u'), 0, 3));
                $description = e($request->input('description'));
                $content     = e($request->input('content'));
                $date        =  Carbon::now()->format('Y-m-d');
                $time        =  Carbon::now()->format('g:i:s');
                $id_image    = $request->input('image');
                if ($request->hasFile('image')) {
                    $imageInput   = $request->file('image');
                    $imageNew     = Carbon::now()->format('Y-m-d H-i-s')."-".substr(Carbon::now()->format('u'), 0, 3)."-".$imageInput->getClientOriginalName();
                    $imageUrl     = 'storage/post/';
                    $request->image->move($imageUrl, $imageNew);
                    $id_image     = 'storage/post/' . $imageNew;
                }
                $posts   = DB::select('CALL AdminBlogUpdate(?,?,?,?,?,?,?,?,?,?,?)',[
                    $id_Post,
                    $id_Statu,
                    $id_Categori,
                    $id_User,
                    $id_title,
                    $slug,
                    $id_image,
                    $description,
                    $content,
                    $date,
                    $time,
                ]);
                //return $posts[0];
                if($posts[0]->statu === 'error'){
                    $rpa = $posts[0]->id_image;
                    if(File::exists($rpa)){
                        File::delete($rpa);
                    }
                    return response()->json([
                        'statu'   => 'error',
                        'message' => $posts[0],
                    ], 400);
                }
                else if($posts[0]->statu === 'success'){
                    $rpa = $posts[0]->lImage;
                    if(File::exists($rpa)){
                        File::delete($rpa);
                    }
                    return response()->json([
                        'statu'      => 'success',
                        'message'    => $posts[0],
                    ],200);
                }
            }
            else{
                return response()->json([
                    'statu'   => 'error',
                    'message' => 'This option is not allowed',
                    'redirect'=> url('/admin/blog-index')
                ],500);
            }
        }catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ],500);
        }   
    }

    public function delete($idPost)
    {
        try{
            $id_Post = $idPost;
            $numeric = '/^[0-9]+$/';

            if(preg_match($numeric, $idPost)){

                $posts = DB::select('CALL AdminBlogDelete(?)',[
                    $id_Post,
                ]);

                if($posts[0]->statu === 'error'){
                    return response()->json([
                        'statu'    => 'error',
                        'message'  => $posts,
                        'redirect' => url('/admin/blog-index')
                    ],404);
                }
                else if($posts[0]->statu === 'success'){
                    $rpa = $posts[0]->image;
                    if(File::exists($rpa)){
                        File::delete($rpa);
                    }
                    return response()->json([
                        'statu'    => 'success',
                        'message'  => 'Success procedure',
                        'posts'    => $posts,
                    ],200);
                    
                }
            }
            else{
                return response()->json([
                    'statu'   => 'error',
                    'message' => 'This option is not allowed',
                    'redirect'=> url('/admin/blog-index')
                ],500);
            }
        }
        catch(Exception $e){
            return response()->json([
                'statu'   => 'error',
                'message' => 'Error procedure',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}
