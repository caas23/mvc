<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 * @SuppressWarnings(PHPMD) (UnusedFormalParameter $schema)
 */
final class Version20240530203919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE energy_supply (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, bf72 FLOAT NOT NULL, gas72 FLOAT NOT NULL, water72 FLOAT NOT NULL, wind72 FLOAT NOT NULL, sun72 FLOAT NOT NULL, total72 FLOAT NOT NULL, bf82 FLOAT NOT NULL, gas82 FLOAT NOT NULL, water82 FLOAT NOT NULL, wind82 FLOAT NOT NULL, sun82 FLOAT NOT NULL, total82 FLOAT NOT NULL, bf92 FLOAT NOT NULL, gas92 FLOAT NOT NULL, water92 FLOAT NOT NULL, wind92 FLOAT NOT NULL, sun92 FLOAT NOT NULL, total92 FLOAT NOT NULL, bf02 FLOAT NOT NULL, gas02 FLOAT NOT NULL, water02 FLOAT NOT NULL, wind02 FLOAT NOT NULL, sun02 FLOAT NOT NULL, total02 FLOAT NOT NULL, bf12 FLOAT NOT NULL, gas12 FLOAT NOT NULL, water12 FLOAT NOT NULL, wind12 FLOAT NOT NULL, sun12 FLOAT NOT NULL, total12 FLOAT NOT NULL, bf22 FLOAT NOT NULL, gas22 FLOAT NOT NULL, water22 FLOAT NOT NULL, wind22 FLOAT NOT NULL, sun22 FLOAT NOT NULL, total22 FLOAT NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE energy_supply');
    }
}
