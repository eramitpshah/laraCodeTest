@extends('frontend_layouts.frontend')

{{-- Page Title --}}
{{-- @section('page-title', 'Welcome') --}}

{{-- Page Subtitle --}}
{{-- @section('page-subtitle', '') --}}

@section('content')
    <section class="content">                        
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
              <div class="panel-heading">{{ __('Welcome') }}</div>
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-12 text-center">
                    <h4>Welcome to Coding Test !</h4>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
@endsection
