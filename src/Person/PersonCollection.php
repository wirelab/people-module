<?php namespace Wirelab\PeopleModule\Person;

use Anomaly\Streams\Platform\Entry\EntryCollection;

class PersonCollection extends EntryCollection
{
	public function render()
	{
		$people = '';

		foreach ($this as $person) {
			// Render each person individually
			$people .= $person->render();
		}

		return $people;
	}
}
