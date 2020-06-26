@extends('main')

@section('title', "| All Projects")

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('project.index') }}" class="btn btn-lg btn-block btn-primary"></a>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th>{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ substr($project->body, 0, 50) }}{{ strlen($project->body) > 50 ? "..." :"" }}</td>
                            <td>{{ date('M j, Y', strtotime($project->created_at)) }}</td>
                            <th>
                                <a href="{{'project.show', $project->id}}" class="btn btn-default">View</a>
                                <a href="{{'project.edit', $project->id}}" class="btn btn-default">Edit</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @stop
