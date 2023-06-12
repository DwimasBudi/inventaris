<?php

namespace App\Http\Controllers;

use App\Models\BorrowedItem;
use Illuminate\Http\Request;

class BorrowedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BorrowedItem $pinjam)
    {
        // return $pinjam->with('item')->get();
        return view("dashboard.pinjam.index", [
            'items' => $pinjam->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowedItem $borrowed_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowedItem $borrowed_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BorrowedItem $borrowed_Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowedItem $borrowed_Item)
    {
        //
    }
}
