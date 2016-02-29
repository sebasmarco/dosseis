<?php

namespace Trab\CiudadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Trab\OfertaBundle\Util\Util;

/*
*@ORM\Entity
 */
class Ciudad {
    
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /** @ORM\Column(type="string", length=100) */
    protected $nombre;
     /** @ORM\Column(type="string", length=100) */
    protected $slug;
    
    function setId($id) {
        $this->id = $id;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
    }
    function setSlug($slug) {
        $this->slug = $slug;
    }
    function getId() {
        return $this->id;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getSlug() {
        return $this->slug;
    }
    public function __toString() {
        return $this->getNombre();
    }
}

