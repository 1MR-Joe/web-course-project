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

#[Entity, Table(name: 'users')]
class User {
    #[Id, Column(options: ['unsigned' => true]), GeneratedValue]
    private int $id;
    #[Column]
    private string $name;
    #[Column]
    private string $email;
    #[Column]
    private string $password;
    #[Column]
    private string $phone;
    #[Column(type: Types::DECIMAL, precision: 3, scale: 2)]
    private float $weight;
    #[Column]
    private string $gender;
    # path of the image of the customer
    # image is stored in the server
    #[Column]
    private string $image;
    #[ManyToOne, JoinColumn(name: 'trainer_id')]
    private Trainer $trainer;
}