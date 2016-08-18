<?php

namespace Drupal\hello\Controller;

class HelloController {

  public function demo(){
    echo 'fes';
    $arr = get_defined_functions();
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $class = get_declared_classes();
    echo '<pre>';
    print_r($class);
    echo '</pre>';

    echo '<pre>';
    var_dump(user_user_login('get_current_user'));
    echo '</pre>';
    return array(
      '#markup'=> t('Hfsdaf!')
    );
  }


}