<?php namespace Wirelab\PeopleModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Illuminate\Http\Request;
use Wirelab\PeopleModule\Person\Contract\PersonRepositoryInterface;

class PeopleController extends PublicController
{
    public function view(PersonRepositoryInterface $people, $indentifier){
        $person = false;

        if (is_numeric($indentifier)) {
        	$person = $people->find($indentifier);
        } else {
        	$person = $people->findBySlug($indentifier);
        }

        if (!$person){
            abort(404);
        }

        // Set meta data
        $this->template->set('meta_title', $person->name);
        $this->template->set('meta_description', $person->description);

        return $this->view->make('module::people/view', compact('person'));
    }
}
