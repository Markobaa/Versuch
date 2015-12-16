<?php

namespace Versuch\stoerungsmelderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Methode;

    /**
     * @Route("/stoerung")
     * 
     */

class StoerungController extends Controller
{
    /**
     * @Route("/view")
     */
    public function viewAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Stoerung:view.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Stoerung:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Stoerung:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Stoerung:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('VersuchstoerungsmelderBundle:Stoerung:edit.html.twig', array(
            // ...
        ));
    }

}
