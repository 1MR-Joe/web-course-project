<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241222222136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products ADD name VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL, ADD rating VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, DROP product_name, DROP product_price, DROP product_image, DROP product_rating, DROP product_description');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products ADD product_name VARCHAR(255) NOT NULL, ADD product_price VARCHAR(255) NOT NULL, ADD product_image VARCHAR(255) NOT NULL, ADD product_rating VARCHAR(255) NOT NULL, ADD product_description VARCHAR(255) NOT NULL, DROP name, DROP price, DROP image, DROP rating, DROP description');
    }
}
