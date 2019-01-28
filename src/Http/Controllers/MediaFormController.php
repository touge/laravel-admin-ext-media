<?php

namespace Touge\MediaForm\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class MediaFormController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('laravel-admin-ext-media::index'));
    }
}