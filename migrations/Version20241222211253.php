<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241222211253 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plans (id INT UNSIGNED AUTO_INCREMENT NOT NULL, plan_name VARCHAR(255) NOT NULL, plan_price VARCHAR(255) NOT NULL, plan_description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE products (id INT UNSIGNED AUTO_INCREMENT NOT NULL, product_name VARCHAR(255) NOT NULL, product_price VARCHAR(255) NOT NULL, product_image VARCHAR(255) NOT NULL, product_rating VARCHAR(255) NOT NULL, product_description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE plans');
        $this->addSql('DROP TABLE products');
    }
}
