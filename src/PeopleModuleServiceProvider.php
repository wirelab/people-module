<?php namespace Wirelab\PeopleModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Wirelab\PeopleModule\Person\Contract\PersonRepositoryInterface;
use Wirelab\PeopleModule\Person\PersonRepository;

class PeopleModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
        'admin/people'                                    => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@index',
        'admin/people/create'                             => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@create',
        'admin/people/edit/{id}'                          => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@edit',
        'admin/people/assignments'                        => 'Wirelab\PeopleModule\Http\Controller\Admin\PeoplecController@assignments',
        'admin/people/fields'                             => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@index',
        'admin/people/fields/choose'                      => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@choose',
        'admin/people/fields/create'                      => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@create',
        'admin/people/fields/edit/{id}'                   => 'Wirelab\PeopleModule\Http\Controller\Admin\FieldsController@edit',
        'admin/people/fields/assignments/{stream}'        => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@index',
        'admin/people/fields/assignments/{stream}/choose' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@choose',
        'admin/people/fields/assignments/{stream}/create' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@create',
        'admin/people/fields/assignments/{stream}/edit/{id}' => 'Wirelab\PeopleModule\Http\Controller\Admin\AssignmentsController@edit',
    ];

    protected $bindings = [
      'Anomaly\Streams\Platform\Model\People\PeoplePeopleEntryModel' => 'Wirelab\PeopleModule\Person\PersonModel',
    ];

    protected $singletons = [
        PersonRepositoryInterface::class => PersonRepository::class,
    ];
}
