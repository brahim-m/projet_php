<?php

namespace ComicReader\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     * @Template()
     */
    public function indexAction()
    {
	$t = new T_Right();
	$t->setName("Admin");
	$t->setV(1);
	$t->setR(1);
	$t->setD(1);
	$t->setU(1);
	echo "création admin : " . $t->getName();

	$em = $this->getDoctrine()->getEntityManager();
	$em->persist($t);
	$em->flush();
	exit;

    }
}
