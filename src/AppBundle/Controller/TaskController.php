<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TaskController extends Controller
{
    public function addAction(Request $request)
    {
        $task = new Task();

        $form = $this->createFormBuilder($task)
          ->add('title', TextType::class)
          ->add('duedate', DateTimeType::class)
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

    public function editAction(Request $request)
    {
        return $this->render('AppBundle:Task:edit.html.twig', array(
            // ...
        ));
    }

    public function removeAction(Request $request)
    {
        $task = new Task();
        $form = $this->createFormBuilder($task)
          ->add('title', CheckboxType::class)
          ->add('remove', SubmitType::class, array('label' => 'Remove Task'))
          ->getForm();

          if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->remove();

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
          }

        return $this->render('AppBundle:Task:remove.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    public function listAction()
    {
        return $this->render('AppBundle:Task:list.html.twig', array(
            // ...
        ));
    }

}
