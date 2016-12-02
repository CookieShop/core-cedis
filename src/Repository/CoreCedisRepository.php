<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Adteam\Core\Cedis\Repository;
/**
 * Description of CoreCedisRepository
 *
 * @author dev
 */
use Doctrine\ORM\EntityRepository;

class CoreCedisRepository extends EntityRepository{
    
    public function fetchAll()
    {
        return $this
                ->createQueryBuilder('U')
                ->select("U.id, U.cedisId, U.namesCedis")
                ->getQuery()->getResult();         
    }
}
