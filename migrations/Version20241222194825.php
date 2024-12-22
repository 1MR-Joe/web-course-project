<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241222194825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trainers (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, weight NUMERIC(3, 2) NOT NULL, gender VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, trainer_id INT UNSIGNED DEFAULT NULL, INDEX IDX_1483A5E9FB08EDF6 (trainer_id), PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9FB08EDF6 FOREIGN KEY (trainer_id) REFERENCES trainers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9FB08EDF6');
        $this->addSql('DROP TABLE trainers');
        $this->addSql('DROP TABLE users');
    }
}
