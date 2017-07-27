<?php

namespace App\Http\Controllers\AdminPromotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class PromotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $promotion = Promotion::where('name', 'LIKE', "%$keyword%")
				->orWhere('sale', 'LIKE', "%$keyword%")
				->orWhere('status', 'LIKE', "%$keyword%")
        ->orderBy('id', 'asc')
				->paginate($perPage);
        } else {
            $promotion = Promotion::orderBy('id', 'asc')->paginate($perPage);
        }

        return view('admin/promotions.promotion.index', compact('promotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/promotions.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
      'sale' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();

        Promotion::create($requestData);

        Session::flash('flash_message', 'Promotion added!');

        return redirect('admin/promotion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('admin/promotions.promotion.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('admin/promotions.promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
      'sale' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();

        $promotion = Promotion::findOrFail($id);
        $promotion->update($requestData);

        Session::flash('flash_message', 'Promotion updated!');

        return redirect('admin/promotion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Promotion::destroy($id);

        Session::flash('flash_message', 'Promotion deleted!');

        return redirect('admin/promotion');
    }
}
