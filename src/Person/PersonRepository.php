<?php namespace Wirelab\PeopleModule\Person;

use Wirelab\PeopleModule\Person\Contract\PersonRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PersonRepository extends EntryRepository implements PersonRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PersonModel
     */
    protected $model;

    /**
     * Create a new PersonRepository instance.
     *
     * @param PersonModel $model
     */
    public function __construct(PersonModel $model)
    {
        $this->model = $model;
    }
}
