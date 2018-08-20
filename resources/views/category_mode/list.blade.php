@extends('backend_layouts.backend')
@section('content')
<section class="content">                   
       
    {{-- {{$categorys->id}} --}}
    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Categorys List</h3>

            <!-- Search -->
            <div class="box-tools pull-right">
                {!!Form::open(['route'=> 'cate_search','method' => 'GET'])!!}
                {!! link_to_action('CategoryController@create','Add','',['class' => 'btn btn-sm btn-primary pull-right'])!!}                    
                {!! Form::close() !!}
            </div>
            <!-- END Search -->
        </div>

        
        <div class="box-body no-padding">
    @if(count($categorys) > 0)
                <div class="table-responsive list-records">
    <table class="table table-hover table-bordered table-striped datatable">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr></thead>
        <tbody>
                @foreach($categorys as $key => $cat_val)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$cat_val->category_title}}</td>
                <td class="table-text">{{$cat_val->category_description}}</td>
                <td><span class="label label-info">{{$cat_val->status}}</span></td>                
                <td>
                    <div class="btn-group">
                        {!! link_to_action('CategoryController@edit','Edit',$cat_val->id,['class' => 'btn btn-info btn-sm ']) !!}
                        {!!Form::open(['action' => ['CategoryController@destroy',$cat_val->id] , 'method' => 'POST','id' => 'formDeleteModel','class' => 'pull-right'] )!!}                                 
                        &nbsp;                       
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class' => 'btn btn-danger btn-sm'])}}                                                    
                        {!! Form::close() !!}
                    </div>

                </td>
            </tr>
            @endforeach
            
                </tbody>
    </table>
    {{$categorys->links()}}
    </div>
@else 
    </div>
        <div class="box-footer clearfix">
    <!-- Pagination -->
    <div class="pull-right">
        <div class="no-margin text-center">
                <p> No Posts Found</p> 
        </div>
    </div>
</div>
@endif
</div>    
    </section>
    @endsection