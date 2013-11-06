<?php
/**
 * Created by PhpStorm.
 * User: natasha
 * Date: 11/5/13
 * Time: 11:48 PM
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CountryController extends Controller
{
    public function allAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return new Response('<html><body><h1>Hello, GeekHub!!!</h1></body></html>');
    }

    public function ukraineAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('AcmeDemoBundle:Country:ukraine.html.twig');

    }

    public function estoniaAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        //return $this->render('AcmeDemoBundle:Countries:estonia.html.twig');
        $request = Request::createFromGlobals();
        $uri = $request->getPathInfo();
        $name = ucfirst(substr($uri,1,strlen($uri)));

        return $this->render('AcmeDemoBundle:Country:estonia.html.twig',
            array('name' => $name));
    }
}
