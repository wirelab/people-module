<?php namespace Wirelab\PeopleModule\Person;

use Anomaly\Streams\Platform\Assignment\Contract\AssignmentRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Anomaly\Streams\Platform\Stream\StreamModel;
use Wirelab\PeopleModule\Person\Contract\PersonRepositoryInterface;

class PersonSeeder extends Seeder
{
	protected $namespace;
	protected $people;
	protected $fields;
	protected $assignments;
	protected $stream;

	public function __construct(
		PersonRepositoryInterface $people,
        AssignmentRepositoryInterface $assignments,
		FieldRepositoryInterface $fields,
		StreamModel $streams
	)
	{
		$this->namespace   = 'people';
		$this->people      = $people;
		$this->fields      = $fields;
		$this->assignments = $assignments;
		$this->stream      = $streams->where('slug','=','people')->first();
	}

    /**
     * Run the seeder.
     */
    public function run()
    {
		$this->addField('url','twitter','Twitter');
		$this->addField('url','linkedin','Linkedin');
		$this->addField('url','facebook','Facebook');
		$this->addField('email','email','Email');
    }

    public function addField($type, $slug, $name, $config = [])
    {
		$field = $this->fields->create([
			'namespace' => $this->namespace,
			'slug'      => $slug,
			'type'      => 'anomaly.field_type.' . $type,
			'locked'    => 0,
			'config'    => $config,
			'en' => [
				'name' => $name
			]
		]);

        $this->assignments->create(
            [
                'stream'   => $this->stream,
                'field'    => $field,
                'required' => false
            ]
        );
    }
}
