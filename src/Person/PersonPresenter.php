<?php namespace Wirelab\PeopleModule\Person;

use Anomaly\Streams\Platform\Entry\EntryPresenter;
use Illuminate\View\Factory;

class PersonPresenter extends EntryPresenter
{
  protected $view;

  public function __construct(Factory $view, $object)
  {
    $this->view = $view;
    parent::__construct($object);
  }

  public function render()
  {
    return $this->view->make('wirelab.module.people::person.view', ['person' => $this->getObject()])->render();
  }
}
