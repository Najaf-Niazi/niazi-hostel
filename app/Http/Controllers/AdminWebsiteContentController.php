<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebsiteContentItem;
use Illuminate\Http\Request;

class AdminWebsiteContentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | WEBSITE CONTENT PAGE
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $selectedPage = $request->get('page', 'home');

        $items = WebsiteContentItem::where(
            'page',
            $selectedPage
        )
            ->get()
            ->keyBy('content_key');

        return view(
            'admin.content.index',
            compact('items', 'selectedPage')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SAVE ALL CHANGES
    |--------------------------------------------------------------------------
    */

    public function saveAll(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $request->validate([
            'page' => ['nullable', 'string'],

            'content' => ['nullable', 'array'],
            'content.*' => ['nullable', 'string'],

            'images' => ['nullable', 'array'],

            'images.*' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | CURRENT PAGE
        |--------------------------------------------------------------------------
        */

        $page = $request->input(
            'page',
            'home'
        );


        /*
        |--------------------------------------------------------------------------
        | TEXT CONTENT UPDATE
        |--------------------------------------------------------------------------
        */

        $content = $request->input(
            'content',
            []
        );


        foreach ($content as $contentKey => $value) {

            $item = WebsiteContentItem::where(
                'content_key',
                $contentKey
            )->first();


            if (!$item) {
                continue;
            }


            if ($item->type !== 'text') {
                continue;
            }


            $item->value = $value;

            $item->save();
        }


        /*
        |--------------------------------------------------------------------------
        | IMAGE UPDATE
        |--------------------------------------------------------------------------
        */

        $images = $request->file(
            'images',
            []
        );


        foreach ($images as $contentKey => $image) {

            if (!$image) {
                continue;
            }


            $item = WebsiteContentItem::where(
                'content_key',
                $contentKey
            )->first();


            if (!$item) {
                continue;
            }


            if ($item->type !== 'image') {
                continue;
            }


            $path = $image->store(
                'website-editor',
                'public'
            );


            $item->value = $path;

            $item->save();
        }


        /*
        |--------------------------------------------------------------------------
        | RETURN TO SAME ADMIN PAGE
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route(
                'admin.content.index',
                [
                    'page' => $page
                ]
            )
            ->with(
                'success',
                'All website content changes saved successfully.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | RESTORE ORIGINAL CONTENT
    |--------------------------------------------------------------------------
    */

    public function restoreOriginal(Request $request)
    {
        $page = $request->input(
            'page',
            'home'
        );


        $items = WebsiteContentItem::all();


        foreach ($items as $item) {

            $item->value =
                $item->original_value;

            $item->save();
        }


        return redirect()
            ->route(
                'admin.content.index',
                [
                    'page' => $page
                ]
            )
            ->with(
                'success',
                'Original website content restored successfully.'
            );
    }
}