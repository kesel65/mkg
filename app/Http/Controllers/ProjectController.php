<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::take(3)->latest('updated_at')->get();
        if(count($projects) === 0) {
            return view('project.index', ['title' => "Michelle's Development Portfolio", 'projects' => '']);
        } else {
            return view('project.index', ['title' => "Michelle's Development Portfolio", 'projects' => $projects]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create', ['title' => 'Create new Project']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create( $this->verifyInput($request) );
        $project = Project::latest()->first();
        $this->show($project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', ['title' => "Michelle's Project $project->name", 'project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', ['title' => "Edit $project->name", 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($this->verifyInput($request));
        $project->save();
        return view('project.show', ['title' => "Michelle's Project $project->name", 'project' => $project]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $projects = Project::all();
        return view('project.index', ['title' => "Michelle's Development Portfolio", 'projects' => $projects]);
    }

    public function verifyInput(Request $request) {
        return $request->validate([
            'name' => 'required|min:5|max:255',
            'url' => 'required|url',
            'photo_url' => 'required',
            'short_description' => 'required|min:3|max:255',
            'description' => 'required|min:10',
            'demo' => 'required',
            'published_at' => 'date'
        ]);
    }
}
