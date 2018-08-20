@extends('backend_layouts.backend') @section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- Edit Form -->
            <div class="box box-info" id="wrap-edit-box">
                {!! Form::open(['action' => ['CategoryController@update',$category->id],'method' => 'POST' , 'enctype' => 'multipart/form-data' , 'class' => 'form']) !!} {{Form::hidden('_method','PUT')}}

                <div class="box-header with-border">
                    <h3 class="box-title">Edit category</h3>
                </div>

                <div class="box-body">

                    @if(!empty($errors->first()))
                        <div class="row col-lg-12">
                            <div class="alert alert-danger">
                                <span>{{ $errors->first() }}</span>
                            </div>
                        </div>
                    @endif
                    
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group margin-b-5 margin-t-5">
                                {{Form::label('title','Title')}} {{Form::text('category_title',$category->category_title,['class'=>'form-control','placeholder'=>'Category'])}}
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group margin-b-5 margin-t-5">
                                {{Form::label('description','Description')}} {{Form::text('category_description',$category->category_description,['class'=>'form-control','placeholder'=>'Description'])}}
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group margin-b-5 margin-t-5">
                                {{Form::label('status','Status')}} {!! Form::select('status', $cat_status, $category->status, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-9">
                            <div class="clearfix"></div>
                            
                        </div>
                        <div class="col-md-3">
                            <!-- Edit Button -->
                            <div class="col-md-7">
                                <div class="form-group pull-right">
                                    {{Form::submit('Save',['class'=>'btn btn-info'])}}
                                </div>
                            </div>
                            <!-- /.col-xs-6 -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    {!! link_to(url('category'),'cancel',['class'=>'btn btn-default'])!!} {{-- <i class="fa fa-ban"></i> <span>Cancel</span> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {!!Form::close()!!}
            </div>
        </div>
    </div>
</section>

@endsection