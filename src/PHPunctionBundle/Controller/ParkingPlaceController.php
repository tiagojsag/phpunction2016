<?php

namespace PHPunctionBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class ParkingPlaceController extends FOSRestController
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('PHPunctionBundle:ParkingPlace');
        $parkingPlaces = $repository->findAll();

        $view = $this->view($parkingPlaces, 200)
            ->setTemplate("PHPunctionBundle:ParkingPlace:index.html.twig")
            ->setTemplateVar('parking_places');

        return $this->handleView($view);
    }
}
