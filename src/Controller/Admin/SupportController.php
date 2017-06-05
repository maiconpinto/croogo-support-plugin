<?php
namespace Support\Controller\Admin;

use Support\Controller\AppController;

/**
 * Support Controller
 *
 * @property \Support\Model\Table\SupportTable $Support
 *
 * @method \Support\Model\Entity\Support[] paginate($object = null, array $settings = [])
 */
class SupportController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $support = $this->paginate($this->Support);

        $this->set(compact('support'));
        $this->set('_serialize', ['support']);
    }

    /**
     * View method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $support = $this->Support->get($id, [
            'contain' => []
        ]);

        $this->set('support', $support);
        $this->set('_serialize', ['support']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $support = $this->Support->newEntity();
        if ($this->request->is('post')) {
            $support = $this->Support->patchEntity($support, $this->request->getData());
            if ($this->Support->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support could not be saved. Please, try again.'));
        }
        $this->set(compact('support'));
        $this->set('_serialize', ['support']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $support = $this->Support->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $support = $this->Support->patchEntity($support, $this->request->getData());
            if ($this->Support->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support could not be saved. Please, try again.'));
        }
        $this->set(compact('support'));
        $this->set('_serialize', ['support']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $support = $this->Support->get($id);
        if ($this->Support->delete($support)) {
            $this->Flash->success(__('The support has been deleted.'));
        } else {
            $this->Flash->error(__('The support could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
