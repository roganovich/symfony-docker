<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240104171511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (ulid VARCHAR(26) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) DEFAULT NULL, PRIMARY KEY(ulid))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE TABLE users_skills (ulid VARCHAR(26) NOT NULL, name VARCHAR(255) NOT NULL, parent_id VARCHAR(255) NOT NULL, PRIMARY KEY(ulid))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE users_skills');
    }
}
