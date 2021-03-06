<?php

namespace Minsal\SicardiohnrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlOcupacion
 *
 * @ORM\Table(name="ctl_ocupacion")
 * @ORM\Entity
 */
class CtlOcupacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_ocupacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;


}
