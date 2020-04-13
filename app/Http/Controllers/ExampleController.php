<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $examples = Example::all();

        return response()->json($examples);
    }

    public function show($id)
    {
        $example = Example::findOrFail($id);

        return response()->json($example);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        Example::create($request->all());

        return response()->json([
            'code' => 200,
            'message' => 'Successfully add new example'
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $example = Example::findOrFail($id);

        $example->title = $request->title;
        $example->description = $request->description;
        $example->save();

        return response()->json([
            'code' => 200,
            'message' => 'Successfully update example'
        ]);
    }

    public function destroy($id)
    {
        $example = Example::findOrFail($id);

        $example->delete();

        return response()->json([
            'code' => 200,
            'message' => 'Successfully delete example'
        ]);
    }
}
