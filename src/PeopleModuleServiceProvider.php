<?php namespace Wirelab\PeopleModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class PeopleModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
        'admin/people'                                    => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@index',
        'admin/people/create'                             => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@create',
        'admin/people/edit/{id}'                          => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@edit',
        'admin/people/assignments'                        => 'Wirelab\PeopleModule\Http\Controller\Admin\Peoplecontroller@assignments',
        'admin/people/fields'                             => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@index',
        'admin/people/fields/choose'                      => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@choose',
        'admin/people/fields/create'                      => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@create',
        'admin/people/fields/edit/{id}'                   => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@edit',
        'admin/people/fields/assignments/{stream}'        => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@index',
        'admin/people/fields/assignments/{stream}/choose' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@choose',
        'admin/people/fields/assignments/{stream}/create' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@create',
    ];

    protected $bindings = [
      'Anomaly\Streams\Platform\Model\People\PeoplePeopleEntryModel' => 'Wirelab\PeopleModule\Person\PersonModel',
    ];

}
