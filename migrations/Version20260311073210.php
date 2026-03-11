<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260311073210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add foreign keys and performance indexes';
    }

    public function up(Schema $schema): void
    {
        // Foreign keys
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF9460219EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF946025D5A2101 FOREIGN KEY (local_id) REFERENCES local (id)');
        $this->addSql('ALTER TABLE demande_prestation ADD CONSTRAINT FK_A704850C787B318 FOREIGN KEY (demande_devis_id) REFERENCES demande_devis (id)');
        $this->addSql('ALTER TABLE demande_prestation ADD CONSTRAINT FK_A704850C9E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)');
        $this->addSql('ALTER TABLE prix ADD CONSTRAINT FK_F7EFEA5E787B318 FOREIGN KEY (demande_devis_id) REFERENCES demande_devis (id)');

        // Performance indexes
        $this->addSql('CREATE INDEX idx_demande_devis_statut ON demande_devis (statut)');
        $this->addSql('CREATE INDEX idx_demande_devis_date_creation ON demande_devis (date_creation)');
        $this->addSql('CREATE INDEX idx_demande_devis_date_demande ON demande_devis (date_demande)');
        $this->addSql('CREATE INDEX idx_client_email ON client (email)');
    }

    public function down(Schema $schema): void
    {
        // Performance indexes
        $this->addSql('DROP INDEX idx_demande_devis_statut ON demande_devis');
        $this->addSql('DROP INDEX idx_demande_devis_date_creation ON demande_devis');
        $this->addSql('DROP INDEX idx_demande_devis_date_demande ON demande_devis');
        $this->addSql('DROP INDEX idx_client_email ON client');

        // Foreign keys
        $this->addSql('ALTER TABLE demande_devis DROP FOREIGN KEY FK_7DF9460219EB6921');
        $this->addSql('ALTER TABLE demande_devis DROP FOREIGN KEY FK_7DF946025D5A2101');
        $this->addSql('ALTER TABLE demande_prestation DROP FOREIGN KEY FK_A704850C787B318');
        $this->addSql('ALTER TABLE demande_prestation DROP FOREIGN KEY FK_A704850C9E45C554');
        $this->addSql('ALTER TABLE prix DROP FOREIGN KEY FK_F7EFEA5E787B318');
    }
}
