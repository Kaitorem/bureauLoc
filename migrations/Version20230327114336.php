<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327114336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, street_name VARCHAR(255) NOT NULL, city VARCHAR(180) NOT NULL, zip_code VARCHAR(10) NOT NULL, country VARCHAR(255) NOT NULL, longitude NUMERIC(10, 8) NOT NULL, latitude NUMERIC(10, 8) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE office (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, renter_id INT DEFAULT NULL, room_size INT NOT NULL, desk_size INT NOT NULL, can_leave_belongings TINYINT(1) NOT NULL, brightness VARCHAR(20) NOT NULL, network_quality VARCHAR(50) NOT NULL, capacity INT NOT NULL, internet_type VARCHAR(20) NOT NULL, UNIQUE INDEX UNIQ_74516B0264D218E (location_id), INDEX IDX_74516B02E289A545 (renter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE office ADD CONSTRAINT FK_74516B0264D218E FOREIGN KEY (location_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE office ADD CONSTRAINT FK_74516B02E289A545 FOREIGN KEY (renter_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE office DROP FOREIGN KEY FK_74516B0264D218E');
        $this->addSql('ALTER TABLE office DROP FOREIGN KEY FK_74516B02E289A545');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE office');
    }
}
