<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231217153428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item ALTER stat_min_dmg DROP NOT NULL');
        $this->addSql('ALTER TABLE item ALTER stat_max_dmg DROP NOT NULL');
        $this->addSql('ALTER TABLE item ALTER stat_armor DROP NOT NULL');
        $this->addSql('ALTER TABLE item ALTER stat_health DROP NOT NULL');
        $this->addSql('ALTER TABLE item ALTER slot DROP NOT NULL');
        $this->addSql('ALTER TABLE item ALTER type DROP NOT NULL');
        $this->addSql('ALTER TABLE item ALTER set_item DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE item ALTER stat_min_dmg SET NOT NULL');
        $this->addSql('ALTER TABLE item ALTER stat_max_dmg SET NOT NULL');
        $this->addSql('ALTER TABLE item ALTER stat_armor SET NOT NULL');
        $this->addSql('ALTER TABLE item ALTER stat_health SET NOT NULL');
        $this->addSql('ALTER TABLE item ALTER slot SET NOT NULL');
        $this->addSql('ALTER TABLE item ALTER type SET NOT NULL');
        $this->addSql('ALTER TABLE item ALTER set_item SET NOT NULL');
    }
}
