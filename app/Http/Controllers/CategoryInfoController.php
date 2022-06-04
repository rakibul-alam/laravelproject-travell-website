<?php

namespace App\Http\Controllers;

use App\CategoryInfo;
use Illuminate\Http\Request;

class CategoryInfoController extends Controller
{
    public function createCategory()
    {
        return view('admin-dashboard.pages.category.create-category');
    }


    public function saveCategory(Request $request)
    {
        CategoryInfo::create($request->all());
        return back()->with('message', 'info added');
    }


    public function manageCategory()
    {
        return view('admin-dashboard.pages.category.manage-category', [
            'categories' => CategoryInfo::orderBy('id', 'desc')->get(),
            'total_categories' => count(CategoryInfo::orderBy('id', 'desc')->get())
        ]);
    }


    public function editCategory($id)
    {
        return view('admin-dashboard.pages.category.edit-category', [
            'categories' => CategoryInfo::all()
        ]);

    }

    public function deleteCategory(Request $request)
    {
        $delete_category = CategoryInfo::find($request->id);
        if ($delete_category) {

            $delete_category->delete();
            return redirect('/admin-dashboard/manage-category')->with('message', 'delete Info');

        }
    }


    public function detailsCategory($id)
    {
        return view('admin-dashboard.pages.category.view-category', [
            'category' => CategoryInfo::find($id)
        ]);
    }


    public function changeCategoryStatus($id)
    {
        $statusFind = CategoryInfo::find($id);
        if ($statusFind) {
            if ($statusFind->category_status == 1) {
                $statusFind->category_status = 0;
                $statusFind->save();
            } else {
                $statusFind->category_status = 1;
                $statusFind->save();
            }
            return back()->with('message', 'success');
        } else {
            return back()->with('message', 'error');
        }
    }


    public function updateCategory(Request $request)
    {
        $updateCategory = CategoryInfo::find($request->id);

        $updateCategory->category_name = $request->category_name;
        $updateCategory->category_description = $request->category_description;
        $updateCategory->category_status = $request->category_status;
        $updateCategory->save();
    }
}



