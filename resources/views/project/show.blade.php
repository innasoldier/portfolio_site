@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $project->title }}</h1>
            <p class="lead">{{ $project->body }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($project->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($project->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('project.edit', 'Edit', array($project->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['project.destroy', $project->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-delete btn-block']) !!}

                        {!! Form::close() !!}
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
