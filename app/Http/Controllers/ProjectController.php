<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store aal the projects in it
        $projects = Project::all();
        //return a view and pass in the above variable
        return view('project.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        //store in the database
        $project = new Project;

        $project->title = $request->title;
        $project->body = $request->body;

        $project->save();

        Session::flash('success', 'The project was successfully added!');

        return redirect()->route('project.show', $project->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show')->withProject($project);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find a post in database and save as a variable
        $project = Project::find($id);
        //return view and pass the project var
        return view('project.edit')->withProject($project);
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
        //validate the data
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        //Save the data to the database
        $project = Project::find($id);

        $project->title = $request->input('title');
        $project->body = $request->input('body');

        $project->save();

        //set flash data with success message
        Session::flash('success', 'This project was successfully saved.');

        //redirect with flash data to project.show
        return redirect()->route('project.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
