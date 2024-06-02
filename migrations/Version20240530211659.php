<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 * @SuppressWarnings(PHPMD) (UnusedFormalParameter $schema)
 */
final class Version20240530211659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE energy_petro (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, ind87 DOUBLE PRECISION NOT NULL, tr87 DOUBLE PRECISION NOT NULL, ho87 DOUBLE PRECISION NOT NULL, total87 DOUBLE PRECISION NOT NULL, ind92 DOUBLE PRECISION NOT NULL, tr92 DOUBLE PRECISION NOT NULL, ho92 DOUBLE PRECISION NOT NULL, total92 DOUBLE PRECISION NOT NULL, ind97 DOUBLE PRECISION NOT NULL, tr97 DOUBLE PRECISION NOT NULL, ho97 DOUBLE PRECISION NOT NULL, total97 DOUBLE PRECISION NOT NULL, ind02 DOUBLE PRECISION NOT NULL, tr02 DOUBLE PRECISION NOT NULL, ho02 DOUBLE PRECISION NOT NULL, total02 DOUBLE PRECISION NOT NULL, ind07 DOUBLE PRECISION NOT NULL, tr07 DOUBLE PRECISION NOT NULL, ho07 DOUBLE PRECISION NOT NULL, total07 DOUBLE PRECISION NOT NULL, ind12 DOUBLE PRECISION NOT NULL, tr12 DOUBLE PRECISION NOT NULL, ho12 DOUBLE PRECISION NOT NULL, total12 DOUBLE PRECISION NOT NULL, ind17 DOUBLE PRECISION NOT NULL, tr17 DOUBLE PRECISION NOT NULL, ho17 DOUBLE PRECISION NOT NULL, total17 DOUBLE PRECISION NOT NULL, ind22 DOUBLE PRECISION NOT NULL, tr22 DOUBLE PRECISION NOT NULL, ho22 DOUBLE PRECISION NOT NULL, total22 DOUBLE PRECISION NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE energy_petro');
    }
}
