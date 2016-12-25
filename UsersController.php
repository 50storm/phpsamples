
class UsersController extends AppController{
  //public $scaffold;
  public $uses = array('User');
  public $hasMany = array('Bookmark','Note');

  public $components = array( 'Auth','Flash');
  public $helpers = array('My','Form');


  public function test(){
    // debug($this->request->data);
    if($this->request->is('post')){
      // debug($this->request->data);
      if($this->request->data['type'] === 'sum'){
        //計算に不要なキーを削除
        unset($this->request->data['type']);
        //Postデータを写す
        $data =$this->request->data;
        $totalPrice=0;
        foreach($data as $k1=>$val1){
          // debug($k1);
          // debug($val1);
          // debug($data[$k1]);
          foreach($val1 as $k2=>$val2){
              // debug($val1[$k2]['add']);
              if($val1[$k2]['add']==1) $totalPrice += $val2['price'];

          }
        }
        // debug($totalPrice);
        // exit;
        $this->set('totalPrice', $totalPrice);

        $this->set('data',$this->request->data);

      }
    //   debug("post");
    //
    }else{
          $this->User->recursive = -1;
          $data =$this->User->find('all',array('fields' =>array('type', 'price')));
          $totalPrice=0;
          foreach($data as $k1=>$val1){
            foreach($val1 as $k2=>$val2){
              $totalPrice += $val2['price'];

            }
          }
      // debug($totalPrice);
          $this->set('totalPrice', $totalPrice);
          $this->set('data',$data);
          // debug($data);
    }
  }
}
