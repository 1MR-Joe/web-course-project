<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241222213347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE availabilities (trainer_id INT NOT NULL, plan_id INT NOT NULL, PRIMARY KEY(trainer_id, plan_id))');
        $this->addSql('CREATE TABLE enrollments (user_id INT NOT NULL, plan_id INT NOT NULL, enrollment_date VARCHAR(255) NOT NULL, PRIMARY KEY(user_id, plan_id))');
        $this->addSql('CREATE TABLE orders (user_id INT NOT NULL, product_id INT NOT NULL, order_date VARCHAR(255) NOT NULL, PRIMARY KEY(user_id, product_id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE availabilities');
        $this->addSql('DROP TABLE enrollments');
        $this->addSql('DROP TABLE orders');
    }
}
