<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231129082216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking_option (booking_id INT NOT NULL, option_id INT NOT NULL, INDEX IDX_E11C3B4E3301C60 (booking_id), INDEX IDX_E11C3B4EA7C41D6F (option_id), PRIMARY KEY(booking_id, option_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking_option ADD CONSTRAINT FK_E11C3B4E3301C60 FOREIGN KEY (booking_id) REFERENCES booking (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE booking_option ADD CONSTRAINT FK_E11C3B4EA7C41D6F FOREIGN KEY (option_id) REFERENCES `option` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking_option DROP FOREIGN KEY FK_E11C3B4E3301C60');
        $this->addSql('ALTER TABLE booking_option DROP FOREIGN KEY FK_E11C3B4EA7C41D6F');
        $this->addSql('DROP TABLE booking_option');
    }
}
