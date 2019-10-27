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
        $request->validate([
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->storePubliclyAs('/public/images/uploads/projects', $request->file('photo')->getClientOriginalName());
//        dd($request);
            $request->request->add(['photo_url' => $path]);
//        ddd($request);
            Project::create( $this->verifyInput($request) );
            $projects = Project::take(3)->latest('updated_at')->get();
            if(count($projects) === 0) {
                return view('project.index', ['title' => "Michelle's Development Portfolio", 'projects' => '']);
            } else {
                return view('project.index', ['title' => "Michelle's Development Portfolio", 'projects' => $projects]);
            }
        } else {
            back(['title' => 'Create New Project']);
        }

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
        $photo_name = 'images/projects/' . $request->photo->name();
        $photo_name .= date('Ymd');
        $photo_name .= $request->photo->extension();
        $request->photo->move(public_path('/images/uploads'), $photo_name);

        $request->photo_url = $photo_name;
        $project->update( $this->verifyInput($request) );
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
//        ddd($request);
        return $request->validate([
            'name' => 'required|min:5|max:255',
            'url' => 'required|url',
            'short_description' => 'required|min:3|max:255',
            'description' => 'required|min:10',
            'demo' => 'required',
            'published_at' => 'date',
            'photo_url' => 'required'
        ]);
    }
}
