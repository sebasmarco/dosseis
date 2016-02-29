<?php

namespace Trab\TiendaBundle\Entity;
use Trab\OfertaBundle\Util\Util;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Tienda {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=100) */
    protected $nombre;
    /** @ORM\Column(type="string", length=100) */
    protected $slug;
    /** @ORM\Column(type="string", length=10) */
    protected $login;
    /** @ORM\Column(type="string", length=255) */
    protected $password;
    /** @ORM\Column(type="string", length=255) */
    protected $salt;
    /** @ORM\Column(type="text") */
    protected $descripcion;
    /** @ORM\Column(type="text") */
    protected $direccion;
    /** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad") */
    protected $ciudad;
    function getId() 
    {
        return $this->id;
    }
    function getNombre() 
    {
        return $this->nombre;
    }
    function getSlug() 
    {
        return $this->slug;
    }
    function getLogin() 
    {
        return $this->login;
    }
    function getPassword() 
    {
        return $this->password;
    }
    function getSalt() 
    {
        return $this->salt;
    }
    function getDescripcion() 
    {
        return $this->descripcion;
    }
    function getDireccion() 
    {
        return $this->direccion;
    }
    function getCiudad() 
    {
        return $this->ciudad;
    }
    
    function setId($id) 
    {
        $this->id = $id;
    }
    function setNombre($nombre) 
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
    }
    function setSlug($slug) 
    {
        $this->slug = $slug;
    }
    function setLogin($login) 
    {
        $this->login = $login;
    }
    function setPassword($password) 
    {
        $this->password = $password;
    }
    function setSalt($salt) 
    {
        $this->salt = $salt;
    }
    function setDescripcion($descripcion) 
    {
        $this->descripcion = $descripcion;
    }
    function setDireccion($direccion) 
    {
        $this->direccion = $direccion;
    }
    function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad) 
    {
        $this->ciudad = $ciudad;
    }
    function __toString() {
        return $this->getNombre();
    }
}
