<?php
require_once 'Mvc/frontend/models/Producer.php';
class ProducerController extends Controller{
    public function producerProduct(){
        $producer_model=new Producer();
        $producers=$producer_model->producerProduct();
        $this->content=$this->render("Mvc/frontend/views/producers/producerProduct.php",["producers" => $producers]);
        echo $this->content;
    }
  public function checkProducer(){
    $producer_model=new Producer();
    $producers=$producer_model->producerProduct();
    $this->content=$this->render("Mvc/frontend/views/producers/checkProducer.php",["producers" => $producers]);
    echo $this->content;
  }

}