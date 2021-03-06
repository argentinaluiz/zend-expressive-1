<?php

namespace CodeEmailMKT\Infrastructure\Persistence\Doctrine\Repository;


use CodeEmailMKT\Domain\Entity\Customer;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;


class CustomerRepositoryFactory implements FactoryInterface
{
    /*public function __invoke(ContainerInterface $container)
    {
        /** @var EntityManager $entityManager */
       // $entityManager = $container->get(EntityManager::class);
       // return $entityManager->getRepository(Customer::class);
   // }*/

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $serviceLocator->get(EntityManager::class);
        return $entityManager->getRepository(Customer::class);
    }
}
