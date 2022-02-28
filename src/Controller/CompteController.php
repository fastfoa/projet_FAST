<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    function checkRGPD()
    {
    //dd( $t );
    $rgpd = $this->getUser()->getRGPDOK();

    if (!$rgpd)
        return $this->redirectToRoute( "rgpdForm" );
    return null;
    }

    public function monCompte(): Response
    {
        $ret = $this->checkRGPD();
        if ( $ret )
            return $ret;

        return $this->render('compte/compte.html.twig');
    }
}
