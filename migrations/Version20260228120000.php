<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260228120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add pdf_path column to demande_devis table for PDF caching';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE demande_devis ADD pdf_path VARCHAR(500) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE demande_devis DROP pdf_path');
    }
}
