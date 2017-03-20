<?php namespace Wirelab\PeopleModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Wirelab\PeopleModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Assignment\Form\AssignmentFormBuilder;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class AssignmentsController extends AdminController
{
    public function index(AssignmentTableBuilder $table, StreamRepositoryInterface $streams, $stream)
    {
        $stream = $streams->find($stream);
        $table->setStream($stream);
        return $table->render();
    }

    public function choose(FieldRepositoryInterface $fields, StreamRepositoryInterface $streams, $stream)
    {
        $stream = $streams->find($stream);
        $fields = $fields
            ->findAllByNamespace('people')
            ->notAssignedTo($stream)
            ->unlocked();

        return $this->view->make('module::admin/assignments/choose', compact('fields', 'type'));
    }

    public function create(AssignmentFormBuilder $builder, FieldRepositoryInterface $fields, StreamRepositoryInterface $streams, $stream)
    {
        $stream = $streams->find($stream);
        $field = $fields->find($this->request->get('field'));

        $builder->setField($field);
        $builder->setStream($stream);
        return $builder->render();
    }
}
