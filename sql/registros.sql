-- REGISTROS

-- CRIADOR DE DESAFIOS
INSERT INTO `criadordesafio`(`docCadastrado`, `login`, `senha`, `nome`, `cep`)
VALUES ('12365498700458','cooperativa@gmail.com','123456','Cooperativa','59110660');

INSERT INTO `criadordesafio`(`docCadastrado`, `login`, `senha`, `nome`, `cep`)
VALUES ('98765432101234','cooperativa2@gmail.com','123456','Cooperativa 2','59884330');

-- BONIFICAÇÃO
INSERT INTO `bonificacao`(`id`, `nome`)
VALUES ('1','Sem bonificação');

INSERT INTO `bonificacao`(`id`, `nome`)
VALUES ('2','Desconto');


-- TIPO DE RSU
INSERT INTO `rsu`(`id`, `tipo`)
VALUES ('1','Lixo eletrônico');


-- DESAFIOS
INSERT INTO `desafio` (`id`, `titulo`, `descricao`, `idCriadorDesafio`, `idTipoBonificacao`, `idTipoRSU`, `qtdRSU`, `descricaoBonificacao`, `dataLimite`)
VALUES ('1', 'Título do desafio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '12365498700458', '1', '1', '2', NULL, NULL);

INSERT INTO `desafio` (`id`, `titulo`, `descricao`, `idCriadorDesafio`, `idTipoBonificacao`, `idTipoRSU`, `qtdRSU`, `descricaoBonificacao`, `dataLimite`)
VALUES ('2', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '98765432101234', '1', '1', '1', '5%', NULL);