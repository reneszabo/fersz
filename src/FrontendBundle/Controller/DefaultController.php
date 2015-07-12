<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('FrontendBundle:Page:index.html.twig', array());
  }

}
