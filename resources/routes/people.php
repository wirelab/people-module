<?php

return [
    'admin/people' => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@index',
    'admin/people/create' => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@create',
    'admin/people/edit/{id}' => 'Wirelab\PeopleModule\Http\Controller\Admin\PeopleController@edit',
    'admin/people/assignments' => 'Wirelab\PeopleModule\Http\Controller\Admin\Peoplecontroller@assignments',
];
