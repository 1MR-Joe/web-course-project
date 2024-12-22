<?php 

declare(strict_types=1);

namespace App\Entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'plans')]
class Plan{

    #[Id, Column(options: ['unsigned' => true]), GeneratedValue]
    private int $id;
    #[Column]
    private string $plan_name;
    #[Column]
    private string $plan_price;
    #[Column]
    private string $plan_description;

}