<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_task_add
        if ('/Add' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::AddAction',  '_route' => 'app_task_add',);
        }

        // app_task_edit
        if ('/Edit' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::EditAction',  '_route' => 'app_task_edit',);
        }

        // app_task_remove
        if ('/Remove' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::RemoveAction',  '_route' => 'app_task_remove',);
        }

        // app_task_list
        if ('/List' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::ListAction',  '_route' => 'app_task_list',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
