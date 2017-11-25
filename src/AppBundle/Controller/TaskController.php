<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskController extends Controller
{
    public function addAction(Request $request)
    {
        $task = new Task();
        $task->setTitle('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
          ->add('title', TextType::class)
          ->add('duedate', DateType::class)
          ->add('save', SubmitType::class, array('label' => 'Create Task'))
          ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $task = $form->getData();

          $em = $this->getDoctrine()->getManager();
          $em->persist($task);
          $em->flush();
        }

        return $this->render('AppBundle:Task:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    public function editAction()
    {
        return $this->render('AppBundle:Task:edit.html.twig', array(
            // ...
        ));
    }

    public function removeAction()
    {
        return $this->render('AppBundle:Task:remove.html.twig', array(
            // ...
        ));
    }

    public function listAction()
    {
        return $this->render('AppBundle:Task:list.html.twig', array(
            // ...
        ));
    }

}
