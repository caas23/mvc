<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 * @SuppressWarnings(PHPMD) (UnusedFormalParameter $schema)
 */
final class Version20240523141702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE deceasedCovid (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, totalDeceased INTEGER NOT NULL, menDeceased INTEGER NOT NULL, womenDeceased INTEGER NOT NULL, totalUnder50 INTEGER NOT NULL, menUnder50 INTEGER NOT NULL, womenUnder50 INTEGER NOT NULL, total5059 INTEGER NOT NULL, men5059 INTEGER NOT NULL, women5059 INTEGER NOT NULL, total6069 INTEGER NOT NULL, men6069 INTEGER NOT NULL, women6069 INTEGER NOT NULL, total7074 INTEGER NOT NULL, men7074 INTEGER NOT NULL, women7074 INTEGER NOT NULL, total7579 INTEGER NOT NULL, men7579 INTEGER NOT NULL, women7579 INTEGER NOT NULL, total8084 INTEGER NOT NULL, men8084 INTEGER NOT NULL, women8084 INTEGER NOT NULL, total8589 INTEGER NOT NULL, men8589 INTEGER NOT NULL, women8589 INTEGER NOT NULL, totalOver90 INTEGER NOT NULL, menOver90 INTEGER NOT NULL, womenOver90 INTEGER NOT NULL, totalCvGroup INTEGER NOT NULL, menCvGroup INTEGER NOT NULL, womenCvGroup INTEGER NOT NULL, totalHbpGroup INTEGER NOT NULL, menHbpGroup INTEGER NOT NULL, womenHbpGroup INTEGER NOT NULL, totalDiabetesGroup INTEGER NOT NULL, menDiabetesGroup INTEGER NOT NULL, womenDiabetesGroup INTEGER NOT NULL, totalLungGroup INTEGER NOT NULL, menLungGroup INTEGER NOT NULL, womenLungGroup INTEGER NOT NULL, totalNoGroup INTEGER NOT NULL, menNoGroup INTEGER NOT NULL, womenNoGroup INTEGER NOT NULL, totalOneGroup INTEGER NOT NULL, menOneGroup INTEGER NOT NULL, womenOneGroup INTEGER NOT NULL, totalMulitpleGroups INTEGER NOT NULL, menMulitpleGroups INTEGER NOT NULL, womenMulitpleGroups INTEGER NOT NULL, totalSpecHome INTEGER NOT NULL, menSpecHome INTEGER NOT NULL, womenSpecHome INTEGER NOT NULL, totalHomeCare INTEGER NOT NULL, menHomeCare INTEGER NOT NULL, womenHomeCare INTEGER NOT NULL, totalHospitalDeath INTEGER NOT NULL, menHospitalDeath INTEGER NOT NULL, womenHospitalDeath INTEGER NOT NULL, totalSpecHomeDeath INTEGER NOT NULL, menSpecHomeDeath INTEGER NOT NULL, womenSpecHomeDeath INTEGER NOT NULL, totalOrdHomeDeath INTEGER NOT NULL, menOrdHomeDeath INTEGER NOT NULL, womenOrdHomeDeath INTEGER NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE deceasedCovid');
    }
}
