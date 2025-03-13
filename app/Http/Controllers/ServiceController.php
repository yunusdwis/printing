<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.rubick-side-menu-service-list-page', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_service' => 'required|string|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'additional_words' => 'nullable|string',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:0',
        ]);

        $mainImagePath = $request->file('main_image')->store('services/main_images', 'public');
        $additionalImagesPaths = [];
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $path = $image->store('services/additional_images', 'public');
                $additionalImagesPaths[] = $path;
            }
        }

        Service::create([
            'name_service' => $validated['name_service'],
            'main_image' => $mainImagePath,
            'description' => $validated['description'],
            'additional_words' => $validated['additional_words'] ?? null,
            'additional_images' => json_encode($additionalImagesPaths),
            'price' => $validated['price'],
        ]);

        return redirect()->back()->with('success', 'Service added successfully!');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json([
            'id' => $service->id,
            'name_service' => $service->name_service,
            'main_image' => $service->main_image,
            'description' => $service->description,
            'additional_words' => $service->additional_words,
            'additional_images' => $service->additional_images,
        ]);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_service' => 'required|string|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'additional_words' => 'nullable|string',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('main_image')) {
            if ($service->main_image) {
                Storage::disk('public')->delete($service->main_image);
            }
            $service->main_image = $request->file('main_image')->store('services/main_images', 'public');
        }

        $additionalImagesPaths = json_decode($service->additional_images, true) ?? [];
        if ($request->hasFile('additional_images')) {
            foreach ($additionalImagesPaths as $path) {
                Storage::disk('public')->delete($path);
            }

            $additionalImagesPaths = [];
            foreach ($request->file('additional_images') as $image) {
                $path = $image->store('services/additional_images', 'public');
                $additionalImagesPaths[] = $path;
            }
        }

        $service->update([
            'name_service' => $validated['name_service'],
            'main_image' => $service->main_image,
            'description' => $validated['description'],
            'additional_words' => $validated['additional_words'] ?? null,
            'additional_images' => json_encode($additionalImagesPaths),
        ]);

        return redirect()->route('rubick-side-menu-service-list-page')->with('success', 'Service updated successfully!');
    }

    public function destroy(Service $service)
    {
        // Menghapus service
        $service->delete();

        return redirect()->route('rubick-side-menu-service-list-page')->with('success', 'Service deleted successfully.');
    }
}
