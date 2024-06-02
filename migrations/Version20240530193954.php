<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 * @SuppressWarnings(PHPMD) (UnusedFormalParameter $schema)
 */
final class Version20240530193954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE energy_use (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, total07 INTEGER NOT NULL, bf07 INTEGER NOT NULL, lBf07 INTEGER NOT NULL, sBf07 INTEGER NOT NULL, bg07 INTEGER NOT NULL, waste07 INTEGER NOT NULL, gas07 INTEGER NOT NULL, water07 INTEGER NOT NULL, wind07 INTEGER NOT NULL, sun07 INTEGER NOT NULL, total12 INTEGER NOT NULL, bf12 INTEGER NOT NULL, lBf12 INTEGER NOT NULL, sBf12 INTEGER NOT NULL, bg12 INTEGER NOT NULL, waste12 INTEGER NOT NULL, gas12 INTEGER NOT NULL, water12 INTEGER NOT NULL, wind12 INTEGER NOT NULL, sun12 INTEGER NOT NULL, total17 INTEGER NOT NULL, bf17 INTEGER NOT NULL, lBf17 INTEGER NOT NULL, sBf17 INTEGER NOT NULL, bg17 INTEGER NOT NULL, waste17 INTEGER NOT NULL, gas17 INTEGER NOT NULL, water17 INTEGER NOT NULL, wind17 INTEGER NOT NULL, sun17 INTEGER NOT NULL, total22 INTEGER NOT NULL, bf22 INTEGER NOT NULL, lBf22 INTEGER NOT NULL, sBf22 INTEGER NOT NULL, bg22 INTEGER NOT NULL, waste22 INTEGER NOT NULL, gas22 INTEGER NOT NULL, water22 INTEGER NOT NULL, wind22 INTEGER NOT NULL, sun22 INTEGER NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE energy_use');
    }
}
