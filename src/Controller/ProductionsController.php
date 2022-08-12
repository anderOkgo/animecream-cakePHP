<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

use Cake\Datasource\ConnectionManager;

use App\Controller\AppController;


/**
 * Productions Controller
 *
 * @property \App\Model\Table\ProductionsTable $Productions
 *
 * @method \App\Model\Entity\Production[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductionsController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['app']);
        $this->Auth->allow(['appo']);
        $this->Auth->allow(['app2']);
        $this->Auth->allow(['buscar']);
        
    }

 public $paginate = [
       /* 'fields' => ['Productions.id', 'Productions.qualification'],*/
        'limit' => 10
        /*'order' => [
            'Productions.qualification' => 'asc'*
        ]*/
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler');
        
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Genres', 'Demographics', 'Titles'],
            'limit'=>5

        ];
        $productions = $this->paginate($this->Productions);

        $this->set(compact('productions'));

  
    }

    /**
     * View method
     *
     * @param string|null $id Production id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
/*    public function view($id = null)
    {
        $production = $this->Productions->get($id, [
            'contain' => ['Demographics', 'Genres', 'Titles']
        ]);

        $this->set('production', $production);
    }*/

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $production = $this->Productions->newEntity();
        if ($this->request->is('post')) {
            $production = $this->Productions->patchEntity($production, $this->request->getData());
            if ($this->Productions->save($production)) {
                $this->Flash->success(__('The production has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The production could not be saved. Please, try again.'));
        }
        $demographics = $this->Productions->Demographics->find('list', ['limit' => 200]);
        $genres = $this->Productions->Genres->find('list', ['limit' => 200]);
        //$this->query("CALL update_rankk();");
        $this->set(compact('production', 'demographics', 'genres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Production id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $production = $this->Productions->get($id, [
            'contain' => ['Genres']
        ]);
        if ($this->request->is(['patch', 'post', 'put']))
        {
            $production = $this->Productions->patchEntity($production, $this->request->getData());
            if ($this->Productions->save($production))
            {
                $conn = ConnectionManager::get('default');
                $stmt = $conn->execute('CALL update_rank()');
                $this->Flash->success(__('El anime ha sido modifiado.'));

                return $this->redirect(['action' => 'app']);
            }
            $this->Flash->error(__('The production could not be saved. Please, try again.'));
        }
        $demographics = $this->Productions->Demographics->find('list', ['limit' => 200]);
        $genres = $this->Productions->Genres->find('list', ['limit' => 200]);
        $this->set(compact('production', 'demographics', 'genres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Production id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $production = $this->Productions->get($id);
        if ($this->Productions->delete($production)) {
            $this->Flash->success(__('The production has been deleted.'));
        } else {
            $this->Flash->error(__('The production could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function app($id = null)
    {
      $this->paginate = [
            'contain' => ['Genres', 'Demographics', 'Titles'],
            'limit'=>10

        ];
        $this->appProcess($id,10);

    }

    public function app2($id = null)
    {
      $this->appProcess($id,25);
    }



    public function appo() {
      $production = $this->Productions->find('all')
      ->where('name= "'.$_POST['valorCaja1'].'"');
      if ($this->request->is('ajax') && $this->request->is('post')){
        $this->autoRender=false;
        $respuesta = 'NO existe';
        foreach ($production as $productione ) {
          if ($productione->name==$_POST['valorCaja1']) {
           $respuesta = 'existe';
         } 
       }
       echo $respuesta;
     }
   }

   public function appProcess($id = null, $pag = null){
    
    $parte=substr($id, 0, 7);
      if  ($parte=="nombre-"){
       
        $id2=  str_replace($parte,"",$id);
        $id='BusNomb';
      }

      $parte=substr($id, 0, 6);
      if  ($parte=="lista,"){

        $id2=  str_replace($parte,"",$id);
        $id='listaEspecial';
      }

      /*$parte=substr($id, 0, 10);
      if  ($parte=="capitulos-"){
       
        $id2=  str_replace($parte,"",$id);

        if ($id2 >= 1 and $id2 <= 6 ) {
            $id='entre-1-6-capitulos';
        }elseif ($id2 >= 7 and $id2 <= 13 ) {
            $id='entre-7-13-capitulos';
        }elseif ($id2 >= 14 and $id2 <= 26 ) {
            $id='entre-14-26-capitulos';
        }elseif ($id2 >= 27 and $id2 <= 52 ) {
            $id='entre-27-52-capitulos';
        }elseif ($id2 >= 53 and $id2 <= 100 ) {
            $id='entre-53-100-capitulos';
        }elseif ($id2 >= 101 and $id2 <= 200 ) {
            $id='entre-101-200-capitulos';
        }elseif ($id2 >= 201 and $id2 <= 10000 ) {
            $id='mas-de-200-capitulos';
        }
      }*/

      switch ($id) {
        case 'listaEspecial':
        $start_date="Productions.id in (".$id2.") order by FIELD(Productions.id," .$id2.") ";
        $unico="— mis listas";
        break;
        case 'BusNomb':
        $start_date='Productions.name like "%'.$id2.'%"  or Genres.name like "%'.$id2.'%" ORDER BY qualification DESC';
        /*$start_date="Productions.name like '%".$id2."%' or Titles.name like '%".$id2."%' or Genres.name like '%".$id2."%' or Productions.description like '%".$id2."%' ORDER BY qualification DESC";*/
        $unico="app";
        break;
        case '70s':
        $start_date='year BETWEEN 1970 AND 1979 ORDER BY qualification DESC';
        $unico=" de los 70s";
        break;
        case '80s':
        $start_date='year BETWEEN 1980 AND 1989 ORDER BY qualification DESC';
        $unico=" de los 80s";
        break;
        case '90s':
        $start_date='year BETWEEN 1990 AND 1999 ORDER BY qualification DESC';
        $unico=" de los 90s";
        break;
        case '00s':
        $start_date='year BETWEEN 2000 AND 2009 ORDER BY qualification DESC';
        $unico=" de los 00s";
        break;
        case '10s':
        $start_date='year BETWEEN 2010 AND 2019 ORDER BY qualification DESC';
        $unico=" de los 10s";
        break;
        case 'favoritos':
        $start_date='Productions.id in (47,50,31,2,11,5,3,213,33,107,18,7,83,38,86,21,52,273,295,152,85,81,146,70,134,32,8,19,148,129,80,111,128,114,51,36,261,147,9,175,131,35,12,171,132,202,237,54,77,14) order by FIELD(Productions.id,47,50,31,2,11,5,3,213,33,107,18,7,83,38,86,21,52,273,295,152,85,81,146,70,134,32,8,19,148,129,80,111,128,114,51,36,261,147,9,175,131,35,12,171,132,202,237,54,77,14)';
        $unico="favoritos";
        break;
        case 'kodomo':
        $start_date='demography_id=1 ORDER BY qualification DESC';
        $unico="kodomo";
        break;
        case 'shonen':
        $start_date='demography_id=2  ORDER BY qualification DESC';
        $unico="shōnen";
        break;
        case 'shojo':
        $start_date='demography_id=3  ORDER BY qualification DESC';
        $unico="shojo";
        break;
        case 'seinen':
        $start_date='demography_id=4  ORDER BY qualification DESC';
        $unico="seinen";
        break;
        case 'josei':
        $start_date='demography_id=5  ORDER BY qualification DESC';
        $unico="josei";
        break;
        case 'shonen-seinen':
        $start_date='demography_id=6  ORDER BY qualification DESC';
        $unico="shōnen-seinen";
        break;
        case 'entre-1-6-capitulos':
        $start_date='chapter_numer BETWEEN 1 AND 6 ORDER BY qualification DESC';
        $unico="entre-1-y-6-capitulos";
        break;
        case 'entre-7-13-capitulos':
        $start_date='chapter_numer BETWEEN 7 AND 13 ORDER BY qualification DESC';
        $unico="entre-7-y-13-capitulos";
        break;
        case 'entre-14-26-capitulos':
        $start_date='chapter_numer BETWEEN 14 AND 26 ORDER BY qualification DESC';
        $unico="entre-14-y-26-capitulos";
        break;
        case 'entre-27-52-capitulos':
        $start_date='chapter_numer BETWEEN 27 AND 52 ORDER BY qualification DESC';
        $unico="entre-27-y-52-capitulos";
        break;
        case 'entre-53-100-capitulos':
        $start_date='chapter_numer BETWEEN 53 AND 100 ORDER BY qualification DESC';
        $unico="entre-53-y-100-capitulos";
        break;
        case 'entre-101-200-capitulos':
        $start_date='chapter_numer BETWEEN 101 AND 200 ORDER BY qualification DESC';
        $unico="entre-101-y-200-capitulos";
        break;
        case 'mas-de-200-capitulos':
        $start_date='chapter_numer BETWEEN 200 AND 10000 or chapter_numer = 0 ORDER BY qualification DESC';
        $unico="mas-de-200-capitulos";
        break;
        case 'supertop':
        $start_date='rank BETWEEN 1 AND 250 ORDER BY qualification ASC';
        $unico="supertop";
        break;
        case 'top100':
        $start_date='rank BETWEEN 1 AND 100 ORDER BY qualification ASC';
        $unico="Top 100";
        break;
        default:
        if (is_numeric($id)) {
            $start_date= 'year= '.$id.' ORDER BY qualification DESC';
            $unico=$id;
        }elseif (($id)=="home" or $id==null) {
            $start_date='qualification > 7.500 ORDER BY Productions.id DESC';
            $unico="app";
        }else{
            $start_date= 'Genres.slug= "'.$id.'" ORDER BY qualification DESC';
            $unico=$id;
        }
      }


      $production = $this->paginate($this->Productions->find('all', [
        'contain' => ['Genres', 'Demographics', 'Titles'],
        'limit' => 30
      ])
      ->distinct()
      ->leftJoinWith('Genres')
      ->leftJoinWith('Titles')
      ->where('visible= 1 and '.$start_date));
      

      $genres = $this->Productions->Genres->find('all', ['limit' => 200]);

      $pro = $this->Productions->find('all', array
      (
        'order'=> ['Productions.name' => 'asc']
      ));



      $recipes = $this->Productions->find('all');
        $this->set([
            'recipes' => $production,
            '_serialize' => ['recipes']
        ]);

      $this->set('generos',$genres);
      $this->set('result', $production);
      $this->set('unico', $unico);
      $this->set('pro', $pro);
      

   }





}


