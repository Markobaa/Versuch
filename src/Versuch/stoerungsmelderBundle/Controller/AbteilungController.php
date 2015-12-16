<?php

namespace Versuch\stoerungsmelderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

    /**
     * @Route("/abteilung")
     * 
     */

class AbteilungController extends Controller
{
    /**
     * @Route("/view")
     * 
     */
    public function viewAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Abteilung:view.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Abteilung:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Abteilung:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Abteilung:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Abteilung:show.html.twig', array(
            // ...
        ));
    }

}
