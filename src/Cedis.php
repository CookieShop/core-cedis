<?php
/**
 * Helper para formatear en json paginador
 * 
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @author Ing. Eduardo Ortiz
 * 
 */
namespace Adteam\Core\Cedis;

use Zend\ServiceManager\ServiceManager;
use Adteam\Core\Cedis\Entity\CoreCedis;
use Doctrine\ORM\EntityManager;

class Cedis
{
    protected $em;
    
    /**
     * 
     * @param ServiceManager $service
     */
    public function __construct(ServiceManager $service) {
        $this->em = $service->get(EntityManager::class);        
    }
    
    public function fetchAll()
    {
        return $this->em->getRepository(CoreCedis::class)->fetchAll();
    }
}
