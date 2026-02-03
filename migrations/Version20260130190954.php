<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260130190954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prix (id INT AUTO_INCREMENT NOT NULL, montant_ht NUMERIC(10, 2) NOT NULL, remise NUMERIC(10, 2) DEFAULT NULL, tva NUMERIC(5, 2) NOT NULL, total_ttc NUMERIC(10, 2) NOT NULL, date_creation DATETIME DEFAULT NULL, demande_devis_id INT NOT NULL, UNIQUE INDEX UNIQ_F7EFEA5E787B318 (demande_devis_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE prix ADD CONSTRAINT FK_F7EFEA5E787B318 FOREIGN KEY (demande_devis_id) REFERENCES demande_devis (id)');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF9460219EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF946025D5A2101 FOREIGN KEY (local_id) REFERENCES local (id)');
        $this->addSql('ALTER TABLE demande_prestation ADD CONSTRAINT FK_A704850C787B318 FOREIGN KEY (demande_devis_id) REFERENCES demande_devis (id)');
        $this->addSql('ALTER TABLE demande_prestation ADD CONSTRAINT FK_A704850C9E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prix DROP FOREIGN KEY FK_F7EFEA5E787B318');
        $this->addSql('DROP TABLE prix');
        $this->addSql('ALTER TABLE demande_devis DROP FOREIGN KEY FK_7DF9460219EB6921');
        $this->addSql('ALTER TABLE demande_devis DROP FOREIGN KEY FK_7DF946025D5A2101');
        $this->addSql('ALTER TABLE demande_prestation DROP FOREIGN KEY FK_A704850C787B318');
        $this->addSql('ALTER TABLE demande_prestation DROP FOREIGN KEY FK_A704850C9E45C554');
    }
}
