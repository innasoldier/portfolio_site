@extends('main')

@section('title', '| Create New Project')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="create-project">Create New Project</h1>
            <hr>
            {!! Form::open(array('route' => 'project.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('body', 'Project Body:') }}
                {{Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::submit('Create Project', array('class' => 'btn btn-warning no-padding btn-lg btn-block')) }}
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
