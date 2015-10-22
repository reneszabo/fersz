<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('FrontendBundle:Page:index.html.twig', array());
  }

  public function imageAction($imageName = "") {

    $this->getSeoPage()
            ->setTitle($imageName)
            ->addMeta('property', 'og:description', "Logo of our client - " . $imageName)
            ->addMeta('property', 'og:type', 'image')
    ;

    return $this->render('FrontendBundle:Page:image.html.twig', array('imageName' => $imageName));
  }

  public function sitemapAction() {
    return $this->render('FrontendBundle:Sitemap:sitemap.xml.twig', array());
  }
  public function canalesAction() {
    return $this->render('/srv/www/fersz/bin/canales.m3u.twig', array());
  }

  /**
   * @return \Sonata\SeoBundle\Seo\SeoPageInterface
   */
  public function getSeoPage() {
    return $this->get('sonata.seo.page');
  }

}
