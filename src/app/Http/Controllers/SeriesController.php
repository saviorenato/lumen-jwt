<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        return Series::all();
    }

    public function show($id)
    {
        return Series::find($id);
    }

    public function create(Request $request)
    {
        return Series::create($request->all());
    }

    public function update(Request $request)
    {
        Series::where('id', $request->id)->update(['nome' => $request->nome]);

        return Series::find($request->id);
    }

    public function destroy($id)
    {
        Series::destroy($id);

        return Series::find($id);
    }

}
