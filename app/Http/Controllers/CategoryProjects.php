<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Support\Carbon;
class CategoryProjects extends Controller
{
    public function index()
    {
        $data = [
            'category' => ProjectCategory::all(),
        ];
        return view('admin.category.view_category',$data);
    }
    public function create()
    {
        return view('admin.category.add_category');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:155',
        ]);
        $today = Carbon::now();
        $post = ProjectCategory::create([
            'name' => $request->name,
        ]);

        if ($post) {
            return redirect()
                ->route('categoryprojects.index')
                ->with([
                    'success' => 'New category has been created successfully'
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
        $category = ProjectCategory::findOrFail($id);
        return view('admin.category.edit_category', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:155',
        ]);

        $category = ProjectCategory::findOrFail($id);

        $category->update([
            'name' => $request->name,
        ]);

        if ($category) {
            return redirect()
                ->route('categoryprojects.index')
                ->with([
                    'success' => 'Category has been updated successfully'
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
        $project = ProjectCategory::findOrFail($id);
        $project->delete();

        if ($project) {
            return redirect()
                ->route('categoryprojects.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('categoryprojects.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
