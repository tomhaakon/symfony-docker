<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231217125438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item ADD date_added DATE NOT NULL');
        $this->addSql('ALTER TABLE item ADD date_last_updated DATE NOT NULL');
        $this->addSql('ALTER TABLE item ADD description TEXT NOT NULL');
        $this->addSql('ALTER TABLE item ADD item_level INT NOT NULL');
        $this->addSql('ALTER TABLE item ADD stat_min_dmg INT NOT NULL');
        $this->addSql('ALTER TABLE item ADD stat_max_dmg INT NOT NULL');
        $this->addSql('ALTER TABLE item ADD stat_armor INT NOT NULL');
        $this->addSql('ALTER TABLE item ADD stat_health INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE item DROP date_added');
        $this->addSql('ALTER TABLE item DROP date_last_updated');
        $this->addSql('ALTER TABLE item DROP description');
        $this->addSql('ALTER TABLE item DROP item_level');
        $this->addSql('ALTER TABLE item DROP stat_min_dmg');
        $this->addSql('ALTER TABLE item DROP stat_max_dmg');
        $this->addSql('ALTER TABLE item DROP stat_armor');
        $this->addSql('ALTER TABLE item DROP stat_health');
    }
}
