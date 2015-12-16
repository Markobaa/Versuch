<?php

namespace Versuch\stoerungsmelderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

	/**@route("/default")

class DefaultController extends Controller
{
    /**
     * @Route("/" , name = "home")
     * 
     */
    public function indexAction()
    {
    
        return $this->render('VersuchstoerungsmelderBundle:Default:index.html.twig');
    }
}
