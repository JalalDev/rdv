<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::all();
        $services = Service::where('category_id', $request->category_id)->get();
        return view('services.index', compact('services', 'categories'));
    }

    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $categories = Category::all();
        return view('services.index', compact('services', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Service::create([
            'intitule' => $request->txt_intitule,
            'description' => $request->txt_description,
            'category_id' => $request->txt_category_id,
        ]);

        return redirect()->route('services.index');
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(Service $service)
    {
        $categories = Category::all();
        return view('services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
    {
        $service->intitule = $request->txt_intitule;
        $service->description = $request->txt_description;
        $service->category_id = $request->txt_category_id;
        $service->save();

        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
