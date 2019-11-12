/*
* Script de Banco de Dados
* Produzido por Recicle Software
* 02/10/2019
*/

-- Criacao de Banco de Dados
CREATE DATABASE IF NOT EXISTS recicle;

-- Criacao de Tabela Cidadao, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.cidadao(
	docCadastrado varchar(20) NOT NULL, -- pessoa física (cpf)
    login varchar (50) NOT NULL,
    senha varchar (20) NOT NULL,
    nome varchar (50) NOT NULL,
    cep varchar (20) NOT NULL,
    CONSTRAINT PK_cidadao PRIMARY KEY(docCadastrado) -- identificador de chave primaria
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- Criacao de Tabela criadorDesafio, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.criadorDesafio(
	docCadastrado varchar(20) NOT NULL, -- Pessoa física (cpf) ou Pessoa Jurídica (CNPJ)
    login varchar(50) NOT NULL,
	senha varchar (20) NOT NULL,
    nome varchar (50) NOT NULL,
    cep varchar (20) NOT NULL,
    CONSTRAINT PK_criadorDesafio PRIMARY KEY(docCadastrado) -- identificador de chave primaria
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- Criacao de Tabela Ponto de Coleta, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.pontoColeta( -- pode ser companhia ou pessoa física
	docCadastrado varchar(50) NOT NULL, -- Pessoa física (cpf) e Pessoa Jurídica (CNPJ)
	login varchar (50) NOT NULL,
    senha varchar (20) NOT NULL,
    nome varchar (50) NOT NULL,
    cep varchar (20) NOT NULL,
    telefone varchar (20) NOT NULL,
    horarioFuncionamento DATE NOT NULL,
    CONSTRAINT PK_pontoColeta PRIMARY KEY(docCadastrado,login) -- identificador de chave primaria com base em dois atributos
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- Criacao de Tabela RSU, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.rsu(
	id int auto_increment,
    tipo varchar (20) NOT NULL,
    CONSTRAINT PK_rsu PRIMARY KEY(id) -- identificador de chave primaria
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- Criacao de Tabela Bonificacao, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.bonificacao(
	id int auto_increment,
    nome varchar(50) not null,
    CONSTRAINT PK_bonificacao PRIMARY KEY(id) -- identificador de chave primaria
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- Criacao de Tabela Desafio, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.desafio(	
	id int auto_increment,
    titulo varchar(50) NOT NULL,
    descricao varchar (1500) NOT NULL,
    idCriadorDesafio varchar(20) NOT NULL, -- fk
    idTipoBonificacao int NULL, -- fk pode haver bonificacao ou nao
    idTipoRSU int NOT NULL, -- fk
    qtdRSU int NULL,
    descricaoBonificacao varchar(50) NULL,
    dataLimite DATE NULL,
    img varchar(50) NULL,
    CONSTRAINT PK_desafio PRIMARY KEY(id) -- identificador de chave primaria
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- Criacao de Tabela Desafio Aceito, atributos, engine para transacao de dados e colecao de caracteres default
CREATE TABLE IF NOT EXISTS recicle.desafioAceito(
	id int auto_increment,
    idCidadao varchar(20) NOT NULL, -- fk
    idCriadorDesafio varchar(20) NOT NULL, -- fk
	idTipoRSU int NOT NULL, -- fk
    idTipoBonificacao int NOT NULL, -- fk
    idDesafio int NOT NULL, -- fk
    cumprido boolean,
    CONSTRAINT PK_desafioAceito PRIMARY KEY(id) -- identificador de chave primaria
) DEFAULT CHARSET = utf8;

use recicle;

-- Adicao de chaves estrangeiras
ALTER TABLE desafio ADD CONSTRAINT fk_criador_desafio FOREIGN KEY (idCriadorDesafio) REFERENCES criadordesafio (docCadastrado);
ALTER TABLE desafio ADD CONSTRAINT fk_rsu FOREIGN KEY (idTipoRSU) REFERENCES rsu (id);
ALTER TABLE desafio ADD CONSTRAINT fk_bonificacao FOREIGN KEY (idTipoBonificacao) REFERENCES bonificacao (id);

ALTER TABLE desafioaceito ADD CONSTRAINT fk_id_criador_desafio FOREIGN KEY (idCriadorDesafio) REFERENCES criadordesafio (docCadastrado);
ALTER TABLE desafioaceito ADD CONSTRAINT fk_id_rsu FOREIGN KEY (idTipoRSU) REFERENCES rsu (id);
ALTER TABLE desafioaceito ADD CONSTRAINT fk_id_bonificacao FOREIGN KEY (idTipoBonificacao) REFERENCES bonificacao (id);
ALTER TABLE desafioaceito ADD CONSTRAINT fk_cidadao FOREIGN KEY (idCidadao) REFERENCES cidadao (docCadastrado);
ALTER TABLE desafioaceito ADD CONSTRAINT fk_desafio FOREIGN KEY (idDesafio) REFERENCES desafio (id);