<?php namespace Wirelab\PeopleModule\Listener;

use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Addon\Module\Event\ModuleWasUninstalled;

class CleanupFields
{
    public function handle(ModuleWasUninstalled $event)
    {
        $fields = app(FieldRepositoryInterface::class);
        $oldFields = $fields->findAllByNamespace('people');
        foreach($oldFields as $field) {
            $field->delete();
        }
    }
}
