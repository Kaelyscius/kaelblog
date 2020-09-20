<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200920135148 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, status LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', author VARCHAR(100) NOT NULL, image_file VARCHAR(255) NOT NULL, is_published TINYINT(1) NOT NULL, soft_delete TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, type VARCHAR(3) NOT NULL, score DOUBLE PRECISION DEFAULT NULL, external_link VARCHAR(255) DEFAULT NULL, INDEX type_idx (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE abstract_article_tag (abstract_article_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_F3D03874E925D4C0 (abstract_article_id), INDEX IDX_F3D03874BAD26311 (tag_id), PRIMARY KEY(abstract_article_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE abstract_article_category (abstract_article_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_3EB3C763E925D4C0 (abstract_article_id), INDEX IDX_3EB3C76312469DE2 (category_id), PRIMARY KEY(abstract_article_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, slug VARCHAR(120) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, articles_id INT NOT NULL, status VARCHAR(100) NOT NULL, ip_user VARCHAR(50) NOT NULL, author VARCHAR(255) NOT NULL, soft_delete TINYINT(1) NOT NULL, INDEX IDX_9474526C1EBAF6CC (articles_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(100) NOT NULL, slug VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abstract_article_tag ADD CONSTRAINT FK_F3D03874E925D4C0 FOREIGN KEY (abstract_article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE abstract_article_tag ADD CONSTRAINT FK_F3D03874BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE abstract_article_category ADD CONSTRAINT FK_3EB3C763E925D4C0 FOREIGN KEY (abstract_article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE abstract_article_category ADD CONSTRAINT FK_3EB3C76312469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C1EBAF6CC FOREIGN KEY (articles_id) REFERENCES article (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abstract_article_tag DROP FOREIGN KEY FK_F3D03874E925D4C0');
        $this->addSql('ALTER TABLE abstract_article_category DROP FOREIGN KEY FK_3EB3C763E925D4C0');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C1EBAF6CC');
        $this->addSql('ALTER TABLE abstract_article_category DROP FOREIGN KEY FK_3EB3C76312469DE2');
        $this->addSql('ALTER TABLE abstract_article_tag DROP FOREIGN KEY FK_F3D03874BAD26311');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE abstract_article_tag');
        $this->addSql('DROP TABLE abstract_article_category');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE tag');
    }
}
