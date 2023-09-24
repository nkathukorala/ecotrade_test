<?php
    class Pages extends Controller{
        public function __construct(){
            $this->pagesModel =$this->model('M_Pages');
        }

        public function index(){

        }
        public function about($name, $age){
            $data = [
                'userName' => $name,
                'userAge' => $age
            ];
            $this->view('v_about',$data);
        }
    }
?>