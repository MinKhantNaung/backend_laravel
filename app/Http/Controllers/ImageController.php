<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageStoreRequest;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use Illuminate\Http\Request;

final class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ImageResource::collection(
            Image::latest()
                ->paginate(4)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageStoreRequest $request)
    {
        $path = $request->file('image')->store('images', 'public');

        $image = Image::create([
            'path' => $path,
            'label' => $request->label
        ]);

        return new ImageResource($image);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $image->delete();

        return response(null, 204);
    }
}
