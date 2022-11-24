CREATE TABLE tbl_user(
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    email VARCHAR(100),
    periodo_renda VARCHAR(50),
    data_nascimento VARCHAR(15),
    tipo_conta VARCHAR(100),
    numero_conta VARCHAR(100),
    saldo DECIMAL,
    id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);


CREATE TABLE Levantamento(
    id_levantamento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    valor DECIMAL,
    data_levantamento VARCHAR(15),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES tbl_user(id_user) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE Deposito (
    id_deposito INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    valor DECIMAL,
    data_deposito VARCHAR(15),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES tbl_user(id_user) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE Transferencia(
    id_transferencia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    valor DECIMAL,
    data_transferencia VARCHAR(15),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES tbl_user(id_user) ON DELETE CASCADE ON UPDATE NO ACTION
);