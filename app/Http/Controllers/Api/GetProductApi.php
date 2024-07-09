<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MyClasses\Laptop;
use App\Models\MyClasses\Desktop;
use Illuminate\Support\Facades\Log;

class GetProductApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (request()->has('type')) {
            $type = $request->type;
            $serial = $request->serial;

            switch ($type) {
                case 'laptop':
                    $this->data = new Laptop();
                    
                    break;
                
                case 'desktop':
                    $this->data = new Desktop();
                    break;
            }
    
            $content = $this->data->where('serial', $serial)->greeting();
    
            return response()->json([
                'content' => $content,
                'status' => 'success'
            ], 200);
        }
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
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
