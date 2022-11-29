<?php
class Home extends Controller{
    function show(){
       $model = $this->model('homeModel');
       $this->view('index',[
        'page'=>'homechitiet',
        'sanpham'=>$model->getsp()
    ]);
    }
    function chitiet(){
        

    }
}