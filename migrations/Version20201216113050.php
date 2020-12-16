<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216113050 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sensor_alerts (id INT AUTO_INCREMENT NOT NULL, sensor_detail_id INT NOT NULL, co_alert_level VARCHAR(255) DEFAULT NULL, start_time DATETIME NOT NULL, end_time DATETIME DEFAULT NULL, row_insertion_datetime DATETIME NOT NULL, INDEX IDX_59EDEE7BA19AAFAE (sensor_detail_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sensor_detail (id INT AUTO_INCREMENT NOT NULL, uuid VARCHAR(255) NOT NULL, mac_address VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, row_insertion_datetime DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sensor_measurement (id INT AUTO_INCREMENT NOT NULL, sensor_detail_id INT NOT NULL, co_level INT NOT NULL, reading_datetime DATETIME NOT NULL, row_insertion_datetime DATETIME NOT NULL, INDEX IDX_C435A88CA19AAFAE (sensor_detail_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sensor_alerts ADD CONSTRAINT FK_59EDEE7BA19AAFAE FOREIGN KEY (sensor_detail_id) REFERENCES sensor_detail (id)');
        $this->addSql('ALTER TABLE sensor_measurement ADD CONSTRAINT FK_C435A88CA19AAFAE FOREIGN KEY (sensor_detail_id) REFERENCES sensor_detail (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sensor_alerts DROP FOREIGN KEY FK_59EDEE7BA19AAFAE');
        $this->addSql('ALTER TABLE sensor_measurement DROP FOREIGN KEY FK_C435A88CA19AAFAE');
        $this->addSql('DROP TABLE sensor_alerts');
        $this->addSql('DROP TABLE sensor_detail');
        $this->addSql('DROP TABLE sensor_measurement');
    }
}
