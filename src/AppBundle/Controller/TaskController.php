<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TaskController extends Controller
{
    /**
     * @Route("/Add")
     */
    public function AddAction()
    {
        return $this->render('AppBundle:Task:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Edit")
     */
    public function EditAction()
    {
        return $this->render('AppBundle:Task:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Remove")
     */
    public function RemoveAction()
    {
        return $this->render('AppBundle:Task:remove.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/List")
     */
    public function ListAction()
    {
        return $this->render('AppBundle:Task:list.html.twig', array(
            // ...
        ));
    }

}
