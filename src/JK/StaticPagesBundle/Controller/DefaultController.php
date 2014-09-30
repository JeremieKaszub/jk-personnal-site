<?php

namespace JK\StaticPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JKStaticPagesBundle:Default:index.html.twig');
    }

    public function personnalAction()
    {
    	return $this->render('JKStaticPagesBundle:Personnal:personnal.html.twig');
    }

    public function experienceAction()
    {
    	return $this->render('JKStaticPagesBundle:Experience:experience.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('JKStaticPagesBundle:Contact:contact.html.twig');
    }
}
