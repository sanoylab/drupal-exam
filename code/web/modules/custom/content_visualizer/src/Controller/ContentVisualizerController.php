<?php
namespace Drupal\content_visualizer\Controller;
use Drupal\Core\Controller\ControllerBase;
class ContentVisualizerController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('<div id="render-chart"></div>'),
        );
    }
    public function test(){
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('Welcome content visualizer Test'),
        );  
      }
}