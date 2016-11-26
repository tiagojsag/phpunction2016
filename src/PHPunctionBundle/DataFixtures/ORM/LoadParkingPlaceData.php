<?php

namespace PHPunctionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PHPunctionBundle\Entity\ParkingPlace;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadParkingPlaceData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 100; $i++) {
            $parkingPlace = new ParkingPlace();
            $parkingPlace->setTitle("Parking Place " . $i);
            $parkingPlace->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus nibh et libero tempus, et mattis quam blandit");
            $parkingPlace->setLatitude(rand(-85, 85));
            $parkingPlace->setLongitude(rand(-180, 180));

            try {
                $result = $this->container->get('bazinga_geocoder.geocoder')->reverse($parkingPlace->getLatitude(), $parkingPlace->getLongitude());
                $address = $result->first();

                $parkingPlace->setAddressOne($address->getStreetName());
                $parkingPlace->setCity($address->getLocality());
                $parkingPlace->setZipCode($address->getPostalCode());
                $parkingPlace->setCountry($address->getCountryCode());
            } catch (\Exception $e) {
                $parkingPlace->setAddressOne("Infinite Loop");
                $parkingPlace->setCity("Cupertino");
                $parkingPlace->setZipCode("95014");
                $parkingPlace->setCountry("USA");
            }
            $manager->persist($parkingPlace);
        }
        $manager->flush();
    }
}