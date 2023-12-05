<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122135631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking ADD user_id INT DEFAULT NULL, ADD booking_agency_source_id INT DEFAULT NULL, ADD booking_agency_target_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE819C7CD2 FOREIGN KEY (booking_agency_source_id) REFERENCES agency (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE12E6BD5 FOREIGN KEY (booking_agency_target_id) REFERENCES agency (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDEA76ED395 ON booking (user_id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE819C7CD2 ON booking (booking_agency_source_id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE12E6BD5 ON booking (booking_agency_target_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEA76ED395');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE819C7CD2');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE12E6BD5');
        $this->addSql('DROP INDEX IDX_E00CEDDEA76ED395 ON booking');
        $this->addSql('DROP INDEX IDX_E00CEDDE819C7CD2 ON booking');
        $this->addSql('DROP INDEX IDX_E00CEDDE12E6BD5 ON booking');
        $this->addSql('ALTER TABLE booking DROP user_id, DROP booking_agency_source_id, DROP booking_agency_target_id');
    }
}