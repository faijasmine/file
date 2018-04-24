<?php
use Phalcon\Mvc\View;
class Eventcontroller extends ControllerBase{
  
    public function indexAction(){
	
  }
  public function editAction($temp){
    $this->session->set('event',$temp);
    $this->response->redirect('edit');    
  }

  public function deleteIDAction($temp){
    $event = Event::findFirst($temp);
    $event->delete();
    $this->response->redirect('event');    
  }
}
