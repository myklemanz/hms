<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Create a property table
 */
class Version20190729033652 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql \'.');
        $this->addSql('CREATE SEQUENCE property_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE property (
                id INT NOT NULL,
                lot_size DECIMAL NOT NULL,
                property_status VARCHAR(100) NOT NULL,
                property_type VARCHAR(100) NOT NULL,
                number_of_bedrooms SMALLINT NOT NULL,
                number_of_bathrooms SMALLINT NOT NULL,
                location VARCHAR(100) NOT NULL,
                price VARCHAR(100) NOT NULL,
                year_build 
                PRIMARY KEY(id)
            )
        ');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        $this->addSql('DROP SEQUENCE property_id_seq CASCADE');
        $this->addSql('DROP TABLE message');
    }
}
