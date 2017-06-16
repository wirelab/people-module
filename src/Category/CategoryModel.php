<?php namespace Wirelab\PeopleModule\Category;

use Wirelab\PeopleModule\Category\Contract\CategoryInterface;
use Anomaly\Streams\Platform\Model\People\PeopleCategoriesEntryModel;
use Wirelab\PeopleModule\Person\PersonModel;


class CategoryModel extends PeopleCategoriesEntryModel implements CategoryInterface
{
    public function getPeople()
    {
        return $this->people()->get();
    }
    public function people()
    {
        return $this->hasMany(PersonModel::class, 'category_id');
    }
}
