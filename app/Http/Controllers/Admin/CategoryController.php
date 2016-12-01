<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $sort = 'id';
        $sort_by = 'ASC';
        $per_page = 10;

        if(!empty($request->get('sort')) && !empty($request->get('sortby'))) {
            $sort = $request->get('sort');
            $sort_by = $request->get('sortby');
        }

        $categories = Category::orderBy($sort, $sort_by);

        $search_id = $request->get('search_id');
        $search_name = $request->get('search_name');
        $search_status = $request->get('search_status');
        $search_date = $request->get('search_date');
        
        if(!empty($search_id)) {
            $categories = $categories->where("id", "LIKE", "%$search_id%");
        }
        
        if(!empty($search_name)) {
            $categories = $categories->where("name", "LIKE", "%$search_name%");
        }
        
        if(!empty($search_status)) {
            if($search_status=='active'){
                $categories = $categories->where("status", "1");
            } else {
                $categories = $categories->where("status", "0");
            }
        }
        
        if(!empty($search_date)) {
            $start_date = date('Y-m-d 00:00:00', strtotime($search_date));
            $end_date = date('Y-m-d 23:59:00', strtotime($search_date));
            $categories = $categories->whereBetween("created_at", array($start_date, $end_date));
        }
        
        if (!empty($request->get('per_page'))) {
            $per_page = $request->get('per_page');
        }
        
        $categories = $categories->paginate($per_page);
        
        return view('admin.category.index', [
            'categories' => $categories, 
            'sort' => $sort, 
            'sort_by' => $sort_by,
            'per_page' => $per_page
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // we will create validation function here
        $this->validate($request, [
            'name' => 'required'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->status = 1;

        if ($category->save()) {
            return redirect()
                            ->route('category.index')
                            ->with('message_description', 'Category added successfully!')
                            ->with('message_type', 'success');
        } else {
            return redirect()
                            ->route('category.index')
                            ->with('message_description', 'Operation failed due to lack of connectivity!')
                            ->with('message_type', 'danger');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $category = Category::findOrFail($id);

        return view('admin.category.show')
                        ->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $category = Category::findOrFail($id);

        return view('admin.category.edit')
                        ->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);
        $this->validate($request, [
            'name' => 'required'
        ]);

        $input = $request->all();

        $category->name = $input['name'];
        $category->status = $input['status'];

        if ($category->save()) {
            return redirect()
                            ->route('category.index')
                            ->with('message_description', 'Category updated successfully!')
                            ->with('message_type', 'success');
        } else {
            return redirect()
                            ->route('category.index')
                            ->with('message_description', 'Operation failed due to lack of connectivity!')
                            ->with('message_type', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $category = Category::findOrFail($id);

        if ($category->delete()) {
            return redirect()
                            ->route('category.index')
                            ->with('message_description', 'Category deleted successfully!')
                            ->with('message_type', 'success');
        } else {
            return redirect()
                            ->route('category.index')
                            ->with('message_description', 'Operation failed due to lack of connectivity!')
                            ->with('message_type', 'danger');
        }
    }

}
