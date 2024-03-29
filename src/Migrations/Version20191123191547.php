<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191123191547 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE empresas (nu_seq_empresa INT AUTO_INCREMENT NOT NULL, co_cnpj TINYTEXT NOT NULL, razao_social TINYTEXT NOT NULL, PRIMARY KEY(nu_seq_empresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pessoas (nu_seq_pessoa INT AUTO_INCREMENT NOT NULL, nu_seq_empresa INT NOT NULL, ds_nome VARCHAR(100) NOT NULL, co_cpf_cnpj VARCHAR(20) NOT NULL, PRIMARY KEY(nu_seq_pessoa)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE empresas');
        $this->addSql('DROP TABLE pessoas');
    }
}
