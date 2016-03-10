<?php

namespace DashboardBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AlimentRepository extends EntityRepository
{

    public function getAll()
    {
        $qb = $this->createQueryBuilder('a');

        $query = $qb->getQuery();

        $result = $query->execute();

        return $result;
    }

    public function testOrm()
    {
        return 'zeaze';
    }
}