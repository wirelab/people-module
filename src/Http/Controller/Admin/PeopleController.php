<?php namespace Wirelab\PeopleModule\Http\Controller\Admin;

use Wirelab\PeopleModule\Person\Form\PersonFormBuilder;
use Wirelab\PeopleModule\Person\Table\PersonTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class PeopleController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PersonTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PersonTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PersonFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PersonFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PersonFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PersonFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function assignments(StreamRepositoryInterface $streams)
    {
        $stream = $streams->findBySlugAndNamespace('people', 'people');

        return $this->redirect->to('admin/people/fields/assignments/' . $stream->getId());
    }
}
