<?php
/**
 * Example controller class. Call it with a URL like:
 * 
 * http://something.com/index.php?show&id=12&name=Bill+Sor
 * 
 */
class Show_Controller {
  public function main(array $parameters) {
    //Create a model.
    $zombie = new Zombie_Model();
    //Populate it with user data.
    $zombie->set_id($parameters['id']);
    $zombie->set_name($parameters['name']);
    //Show it.
    $view = new Zombie_View($zombie);
    $view->render();
  }
}

