<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class MarkdownFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'markdown';
    }
}
