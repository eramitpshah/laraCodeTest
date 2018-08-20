@extends('frontend_layouts.frontend')
@section('content')
<section class="content">                        
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-heading">{{ __('Login') }}</div>

        <div class="panel-body">
            {!! Form::open(['route' => 'login','method' => 'POST','aria-label' => 'Login']) !!}
            @csrf
            <div class="form-group">
                {{Form::label('email','E-Mail Address',['class' => 'col-md-4 control-label'])}}

                <div class="col-md-6" style="margin-bottom: 15px;">
                    {{Form::text('email',old('email'),['class' => 'form-control',$errors->has('email') ?'is-invalid':''])}}
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                {{Form::label('password','Password',['class' => 'col-md-4 control-label'])}}

                <div class="col-md-6">
                    {{Form::password('password',['class' => 'form-control',$errors->has('password') ? ' is-invalid' : '','required' => ''])}}
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group">
                    <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    {{Form::submit('Login',['class' => 'btn btn-primary'])}}                    
                </div>
            </div>
        </form>
        </div>
        </div>
        </div>
        </div>

</section>

@endsection
