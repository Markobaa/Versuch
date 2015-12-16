<?php

namespace Versuch\stoerungsmelderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Methode;

 /**
     * @Route("/maschine")
     * 
     */

class MaschineController extends Controller
{
    /**
     * @Route("/view")
     */
    public function viewAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Maschine:view.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Maschine:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Maschine:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Maschine:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Maschine:show.html.twig', array(
            // ...
        ));
    }

}
