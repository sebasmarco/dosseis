<?php

namespace Trab\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SitioController extends Controller
{
    public function estaticaAction($pagina)
    {
        $lal = $this->getDoctrine()->getManager();
        $oferta = $lal->find('OfertaBundle:Oferta', 1);
        return $this->render('OfertaBundle:Sitio:'.$pagina.'.html.twig', array('oferta' => $oferta));
    }
}
