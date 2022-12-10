<?php

namespace App\Http\Controllers;

use App\Models\AttributeTag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\AttributeTagResource;
use Illuminate\Support\Facades\Validator;

class AttributeTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $prefix = $request->prefix;
        $data = AttributeTag::all();
        if($prefix) {
            $data = $data->where('prefix', '=', $prefix);
        }
        return response(['data' => (AttributeTagResource::collection($data))], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeTag  $attributeTag
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeTag $attributeTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeTag  $attributeTag
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeTag $attributeTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttributeTag  $attributeTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttributeTag $attributeTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeTag  $attributeTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeTag $attributeTag)
    {
        //
    }
}
