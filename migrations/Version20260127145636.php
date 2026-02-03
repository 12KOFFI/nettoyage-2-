<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260127145636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, telephone INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE demande_devis (id INT AUTO_INCREMENT NOT NULL, creneau_horaire VARCHAR(255) NOT NULL, date_demande DATE NOT NULL, frequence VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, client_id INT DEFAULT NULL, local_id INT DEFAULT NULL, INDEX IDX_7DF9460219EB6921 (client_id), INDEX IDX_7DF946025D5A2101 (local_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE demande_prestation (id INT AUTO_INCREMENT NOT NULL, details_specifiques VARCHAR(255) NOT NULL, demande_devis_id INT DEFAULT NULL, prestation_id INT DEFAULT NULL, INDEX IDX_A704850C787B318 (demande_devis_id), INDEX IDX_A704850C9E45C554 (prestation_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE local (id INT AUTO_INCREMENT NOT NULL, type_local VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, surface_m2 INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, code_prestation VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF9460219EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF946025D5A2101 FOREIGN KEY (local_id) REFERENCES local (id)');
        $this->addSql('ALTER TABLE demande_prestation ADD CONSTRAINT FK_A704850C787B318 FOREIGN KEY (demande_devis_id) REFERENCES demande_devis (id)');
        $this->addSql('ALTER TABLE demande_prestation ADD CONSTRAINT FK_A704850C9E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_devis DROP FOREIGN KEY FK_7DF9460219EB6921');
        $this->addSql('ALTER TABLE demande_devis DROP FOREIGN KEY FK_7DF946025D5A2101');
        $this->addSql('ALTER TABLE demande_prestation DROP FOREIGN KEY FK_A704850C787B318');
        $this->addSql('ALTER TABLE demande_prestation DROP FOREIGN KEY FK_A704850C9E45C554');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE demande_devis');
        $this->addSql('DROP TABLE demande_prestation');
        $this->addSql('DROP TABLE local');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
