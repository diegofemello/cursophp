

USE dbphp7;

CREATE TABLE tb_usuarios(
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios(deslogin, dessenha) VALUES('saUMd', '78878');

SELECT * FROM tb_usuarios ORDER BY idusuario;


UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 2;

UPDATE tb_usuarios SET deslogin = 'Diego' WHERE idusuario = 2;

DELETE FROM tb_usuarios WHERE idusuario = 6;

TRUNCATE TABLE tb_usuarios;




