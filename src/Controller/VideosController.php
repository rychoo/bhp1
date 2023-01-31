<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Videos Controller
 *
 * @property \App\Model\Table\VideosTable $Videos
 * @method \App\Model\Entity\Video[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VideosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $videos = $this->paginate($this->Videos);

        $this->set(compact('videos'));
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $video = $this->Videos->get($id, [
            'contain' => ['Transactions'],
        ]);

        $this->set(compact('video'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->authorize($video);
        $video = $this->Videos->newEmptyEntity();
        if ($this->request->is('post')) {
            $video = $this->Videos->patchEntity($video, $this->request->getData());
             $folderToSaveFiles = WWW_ROOT . 'videos' ;

        if(!empty($this->request->getData('filename')))
        {
            $file = $this->request->getData('filename');
            $ext = substr(strtolower(strrchr($file->getClientFilename(), '.')), 1);
            $arr_ext = array('m4a');
            if(in_array($ext, $arr_ext))
            {
                $newFilename = uniqid("video", true).'.'.$ext;                 
                $file->moveTo($folderToSaveFiles .DS. $newFilename );
                $video->set('filename', $newFilename);
//                debug($this->request->data);
            }
        }
            $folderToSaveFiles = WWW_ROOT . 'img' ;
        if(!empty($this->request->getData('picturename')))
        {
            $file = $this->request->getData('picturename');
            $ext = substr(strtolower(strrchr($file->getClientFilename(), '.')), 1);
            $arr_ext = array('jpg', 'jpeg', 'gif','png');
            if(in_array($ext, $arr_ext))
            {
                $newFilename = uniqid("picture", true).'.'.$ext;                 
                $file->moveTo($folderToSaveFiles .DS. $newFilename );
                $video->set('picturename', $newFilename);
                //debug($this->request->data);
            }
        }
           if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $this->set(compact('video'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->authorize($video);
        $video = $this->Videos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $this->set(compact('video'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->authorize($video);
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success(__('The video has been deleted.'));
        } else {
            $this->Flash->error(__('The video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
