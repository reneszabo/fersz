<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('FrontendBundle:Page:index.html.twig', array());
  }

  public function imageAction($imageName = "") {
    return $this->render('FrontendBundle:Page:image.html.twig', array('imageName' => $imageName));
  }

}
