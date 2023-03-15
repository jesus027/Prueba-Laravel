<?php

namespace App\Http\Controllers;

use App\Models\Ordersdetail;
use Illuminate\Http\Request;

/**
 * Class OrdersdetailController
 * @package App\Http\Controllers
 */
class OrdersdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersdetails = Ordersdetail::paginate();

        return view('ordersdetail.index', compact('ordersdetails'))
            ->with('i', (request()->input('page', 1) - 1) * $ordersdetails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordersdetail = new Ordersdetail();
        return view('ordersdetail.create', compact('ordersdetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ordersdetail::$rules);

        $ordersdetail = Ordersdetail::create($request->all());

        return redirect()->route('ordersdetails.index')
            ->with('success', 'Ordersdetail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordersdetail = Ordersdetail::find($id);

        return view('ordersdetail.show', compact('ordersdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordersdetail = Ordersdetail::find($id);

        return view('ordersdetail.edit', compact('ordersdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ordersdetail $ordersdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordersdetail $ordersdetail)
    {
        request()->validate(Ordersdetail::$rules);

        $ordersdetail->update($request->all());

        return redirect()->route('ordersdetails.index')
            ->with('success', 'Ordersdetail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordersdetail = Ordersdetail::find($id)->delete();

        return redirect()->route('ordersdetails.index')
            ->with('success', 'Ordersdetail deleted successfully');
    }
}
