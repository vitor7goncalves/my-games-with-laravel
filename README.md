# Catálogo de Jogos

Um catálogo de jogos online onde os usuários podem criar uma conta, comprar jogos e visualizar seus jogos comprados. Desenvolvido com Laravel e MySQL no WampServer.

## Funcionalidades

- Criação de conta de usuário
- Compra de jogos
- Botão "Comprar" que se transforma em "Jogar" após a compra
- Jogos relacionados à conta do usuário
- Versionamento com Git

## Tecnologias Utilizadas

- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [WampServer](https://www.wampserver.com/)

## Instalação

1. Clone o repositório:
   ```sh
   https://github.com/vitor7goncalves/my-games-with-laravel.git

   Instale as dependências do PHP:
   composer install
Configure o arquivo .env com as informações do seu banco de dados MySQL.

Execute as migrações:
php artisan migrate

Inicie o servidor:
php artisan serve

Como Usar
Crie uma conta de usuário com qualquer email.

Navegue pelo catálogo de jogos.

Clique em "Comprar" para adquirir um jogo.

O botão "Comprar" se transformará em "Jogar" (mesmo que o jogo não exista de fato).

Contribuição
Faça um fork do projeto

Crie uma branch para sua feature (git checkout -b feature/nome-da-feature)

Commit suas mudanças (git commit -m 'Adiciona uma nova feature')

Faça um push para a branch (git push origin feature/nome-da-feature)

Abra um Pull Request

