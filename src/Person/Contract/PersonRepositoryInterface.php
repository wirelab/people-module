<?php namespace Wirelab\PeopleModule\Person\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface PersonRepositoryInterface extends EntryRepositoryInterface
{
    /**
     * Find a vacancy by it's slug.
     *
     * @param $slug
     * @return TypeInterface
     */
    public function findBySlug($slug);
}
