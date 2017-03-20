<?php namespace Wirelab\PeopleModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class PeopleModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    #TODO Move to resources/routes
    protected $routes = [
        'admin/people/fields'           => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@index',
        'admin/people/fields/choose'    => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@choose',
        'admin/people/fields/create'    => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@create',
        'admin/people/fields/edit/{id}' => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@edit',
        'admin/people/fields/assignments/{stream}' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@index',
        'admin/people/fields/assignments/{stream}/choose' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@choose',
        'admin/people/fields/assignments/{stream}/create' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@create',
    ];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $singletons = [
    ];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
