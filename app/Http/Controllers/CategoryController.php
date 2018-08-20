<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorys;
use Auth;
use redireact;
use Validator;


class CategoryController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->has('search')){            
            $categorys = categorys::search($request->search)->paginate(10);
        } else {
            // $category = categorys::all();
            $categorys  = categorys::orderBy('id','asc')->paginate(10);
            // return view('category_mode.category_create')->with('categorys',$category);            
            return view('category_mode.list',compact('categorys'))->with('i',($request->input('page',1)-1)*10);
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_status = array('Active'=>'Active','Inactive' => 'Inactive');
        return view('category_mode.insert')->with('cat_status',$cat_status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_title' => 'required',
            'category_description' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('category/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        else {
            $category = new categorys;
            $category->category_title = $request->input('category_title');
            $category->category_description = $request->input('category_description');
            $category->status = $request->input('status');
            $category->save();

        }
        
        return redirect('category');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = categorys::find($id);
        $category_select = categorys::pluck('status','status');
        $cat_status = array('active'=>'Active','inactive' => 'Inactive');
        
        return view('category_mode.edit',compact('category','category_select','cat_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_title' => 'required',
            'category_description' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('category/'.$id.'/edit/')
                        ->withErrors($validator)
                        ->withInput();
        }
        else {
            $category = categorys::find($id);
            $category->category_title = $request->input('category_title');
            $category->category_description = $request->input('category_description');
            $category->status = $request->input('status');
            $category->save();
        }
        
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = categorys::find($id);
        $category->delete();
        return redirect('category');
    }
}
