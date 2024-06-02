<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 * @SuppressWarnings(PHPMD) (UnusedFormalParameter $schema)
 */
final class Version20240529152405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE deceased_general (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, total17 INTEGER NOT NULL, men17 INTEGER NOT NULL, women17 INTEGER NOT NULL, total18 INTEGER NOT NULL, men18 INTEGER NOT NULL, women18 INTEGER NOT NULL, total19 INTEGER NOT NULL, men19 INTEGER NOT NULL, women19 INTEGER NOT NULL, total20 INTEGER NOT NULL, men20 INTEGER NOT NULL, women20 INTEGER NOT NULL, total21 INTEGER NOT NULL, men21 INTEGER NOT NULL, women21 INTEGER NOT NULL, total22 INTEGER NOT NULL, men22 INTEGER NOT NULL, women22 INTEGER NOT NULL, total23 INTEGER NOT NULL, men23 INTEGER NOT NULL, women23 INTEGER NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE deceased_general');
    }
}
