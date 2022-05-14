<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\TempProjectCategory;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class MyProject extends Controller
{
    public function __construct(){
        
    }
    public function index()
    {
        $data = [
            'projects' => Project::latest()->get(),
            
        ];
        return view('admin.my_project',$data);
    }
    public function create()
    {
        $category = ProjectCategory::all();
        return view('admin.add_project',compact('category'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
            'link_app' => 'max:155',
            'github' => 'max:155',
            'content' => 'required',
        ]);
        if ($image = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['tumbnail'] = "$profileImage";
        }else{
            $profileImage = 'no-image.png';
        }
    
    
        $today = Carbon::now();
        $project = Project::create([
            'title' => $request->title,
            'thumbnail' => $profileImage,
            'link_app' => $request->link_app,
            'github' => $request->github,
            'content' => $request->content,
            'created_at' => $today
        ]);
        $project->category()->sync($request->category);
        if ($project) {
            return redirect()
                ->route('project.index')
                ->with([
                    'success' => 'New project has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $temp = new TempProjectCategory();
        $temps = $temp->getCategoryByProduct($id);
        $category = ProjectCategory::all();

        return view('admin.edit_project', compact('project','temps','category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
            'link_app' => 'max:155',
            'github' => 'max:155',
            'content' => 'required',
        ]);

        $project = Project::findOrFail($id);
        if ($image = $request->file('thumbnail')) {
            if ($request->oldimg) {
                unlink(public_path('images/').$request->oldimg);
            }
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $request->thumbnail->move($destinationPath, $profileImage);
            $request->thumbnail = "$profileImage";
            
        }else{
            unset($request->thumbnail);
            $request->thumbnail = $request->oldimg;
        }
        
        $project->update([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'link_app' => $request->link_app,
            'github' => $request->github,
            'content' => $request->content,
        ]);
        $project->category()->sync($request->category);

        if ($project) {
            return redirect()
                ->route('project.index')
                ->with([
                    'success' => 'Project has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        unlink(public_path('images/').$project->thumbnail);
        $project->delete();

        if ($project) {
            return redirect()
                ->route('project.index')
                ->with([
                    'success' => 'project has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('project.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
    public function upload(Request $request)
    {
        
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
    public function getProject($id)
    {
        return Project::findOrFail($id);
    }
}
