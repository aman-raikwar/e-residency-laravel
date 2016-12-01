<?php

namespace App\Http\Controllers\Admin;

use App\Listing;
use Illuminate\Http\Request;

class ListingController extends BaseController {

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

        $results = Listing::orderBy($sort, $sort_by);

        $search_id = $request->get('search_id');
        $search_name = $request->get('search_name');
        $search_status = $request->get('search_status');
        $search_date = $request->get('search_date');
        
        if(!empty($search_id)) {
            $results = $results->where("id", "LIKE", "%$search_id%");
        }
        
        if(!empty($search_name)) {
            $results = $results->where("title", "LIKE", "%$search_name%");
        }
        
        if(!empty($search_status)) {
            if($search_status=='active'){
                $results = $results->where("status", "1");
            } else {
                $results = $results->where("status", "0");
            }
        }
        
        if(!empty($search_date)) {
            $start_date = date('Y-m-d 00:00:00', strtotime($search_date));
            $end_date = date('Y-m-d 23:59:00', strtotime($search_date));
            $results = $results->whereBetween("created_at", array($start_date, $end_date));
        }
        
        if (!empty($request->get('per_page'))) {
            $per_page = $request->get('per_page');
        }
        
        $results = $results->paginate($per_page);
        
        return view('admin.listing.index', [
            'listings' => $results, 
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
        return view('admin.listing.create');
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
            'title' => 'required',
            'description' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $listing = new Listing;
        $listing->title = $request->title;
        $listing->description = $request->description;
        $listing->status = 1;
        
        if(!empty($request->file('picture'))) {
            $file = $request->file('picture');
            $originalFileName = $file->getClientOriginalName();
            $originalFileExtenstion = $file->getClientOriginalExtension();
            $newFileName = date('Ymdhis') . '-' . (rand(11111, 99999)) . '.' . $originalFileExtenstion;
            $request->file('picture')->move('uploads', $newFileName);
            
            $listing->image_original = $originalFileName;
            $listing->image_new = $newFileName;
        }

        if ($listing->save()) {
            return redirect()
                            ->route('listing.index')
                            ->with('message_description', 'Listing added successfully!')
                            ->with('message_type', 'success');
        } else {
            return redirect()
                            ->route('listing.index')
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
        $listing = Listing::findOrFail($id);

        return view('admin.listing.show')
                        ->withListing($listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $listing = Listing::findOrFail($id);

        return view('admin.listing.edit')
                        ->withListing($listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $listing = Listing::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        $listing->title = $input['title'];
        $listing->description = $input['description'];
        $listing->status = $input['status'];
        
        if(!empty($request->file('picture'))) {
            $file = $request->file('picture');
            $originalFileName = $file->getClientOriginalName();
            $originalFileExtenstion = $file->getClientOriginalExtension();
            $newFileName = date('Ymdhis') . '-' . (rand(11111, 99999)) . '.' . $originalFileExtenstion;
            $request->file('picture')->move('uploads', $newFileName);
            
            $listing->image_original = $originalFileName;
            $listing->image_new = $newFileName;
        }

        if ($listing->save()) {
            return redirect()
                            ->route('listing.index')
                            ->with('message_description', 'Listing updated successfully!')
                            ->with('message_type', 'success');
        } else {
            return redirect()
                            ->route('listing.index')
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
        $listing = Listing::findOrFail($id);

        if ($listing->delete()) {
            return redirect()
                            ->route('listing.index')
                            ->with('message_description', 'Listing deleted successfully!')
                            ->with('message_type', 'success');
        } else {
            return redirect()
                            ->route('listing.index')
                            ->with('message_description', 'Operation failed due to lack of connectivity!')
                            ->with('message_type', 'danger');
        }
    }

}
