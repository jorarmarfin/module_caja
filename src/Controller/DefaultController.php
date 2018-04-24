<?php

namespace Drupal\module_caja\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Mostrar.
   *
   * @return string
   *   Return Hello string.
   */
  public function mostrar() {
    $data['months'] = $this->getMonths();
    $data['years'] = $this->getYears();

    $year = \Drupal::request()->get('anio');
    $mes = \Drupal::request()->get('mes');
    $data['anio'] = $year;
    $data['mes'] = $mes;

    return [
      '#theme' => 'module_caja',
      '#data' => $data,
    ];
  }
  private function getYears() {
    return range(date('Y'),2017, -1);
  }
  private function getMonths()
  {
    return [
        ['value'=>1,'title'=>'Enero'],
        ['value'=>2,'title'=>'Febrero'],
        ['value'=>3,'title'=>'Marzo'],
        ['value'=>4,'title'=>'Abril'],
        ['value'=>5,'title'=>'Mayo'],
        ['value'=>6,'title'=>'Junio'],
        ['value'=>7,'title'=>'Julio'],
        ['value'=>8,'title'=>'Agosto'],
        ['value'=>9,'title'=>'Setiembre'],
        ['value'=>10,'title'=>'Octubre'],
        ['value'=>11,'title'=>'Noviembre'],
        ['value'=>12,'title'=>'Diciembre'],
    ];
  }




}
