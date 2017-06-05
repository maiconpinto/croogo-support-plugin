<?php

namespace Support\Controller\Admin;

use Croogo\Core\Controller\Admin\AppController as CroogoController;

/**
 * Support Controller
 *
 * @property \Support\Model\Table\SupportTable $Support
 */
class SupportController extends CroogoController
{

    /**
     * Index method
     */
    public function index()
    {
        $this->Crud->listener('relatedModels')->relatedModels(true);
        return $this->Crud->execute();
    }

    /**
     * View method
     */
    public function view($id = null)
    {
        return $this->Crud->execute();
    }

    /**
     * Add method
     */
    public function add()
    {
        return $this->Crud->execute();
    }

    /**
     * Edit method
     */
    public function edit($id = null)
    {
        return $this->Crud->execute();
    }

    /**
     * Delete method
     */
    public function delete($id = null)
    {
        return $this->Crud->execute();
    }

}
