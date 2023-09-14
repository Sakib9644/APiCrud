<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{
    public function create(request $request)
    {
        $api = new Api();

        $api->fname = $request->input('fname');
        $api->lastname = $request->input('lastname');
        $api->email = $request->input('email');
        $api->password = $request->input('password');

        $api->save();
        return response()->json($api);
    }
    public function index()
    {
        $apis = Api::all();
        return response()->json($apis);
    }

    public function show($id)
    {
        $api = Api::findOrFail($id);
        return response()->json($api);
    }
    public function update(Request $request, $id)
    {
        $api = Api::findOrFail($id);

        $api->update([
            'fname' => $request->input('fname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response()->json($api);
    }
    public function destroy($id)
    {
        $api = Api::findOrFail($id);
        $api->delete();

        return response()->json(['message' => 'Record deleted successfully']);
    }
}
