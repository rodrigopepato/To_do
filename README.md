# to_do

to_do é uma aplicação de gerenciamento de tarefas desenvolvida com Laravel. Este projeto permite que os usuários criem, visualizem, atualizem e excluam tarefas, além de gerenciar suas listas de tarefas de forma eficaz.
Funcionalidades

    Criação e gerenciamento de tarefas.
    Interface de usuário simples e intuitiva.
    Armazenamento de dados usando MySQL.

Requisitos

Antes de começar, verifique se você tem os seguintes softwares instalados:

    PHP >= 7.4
    Composer
    MySQL
    Node.js e NPM
    Laravel >= 8.x

Configuração
1. Clonar o Repositório

Clone o repositório para o seu ambiente local:

bash

git clone https://github.com/yourusername/to_do.git
cd to_do

2. Instalar Dependências

Instale as dependências do PHP e JavaScript:

bash

composer install
npm install

3. Configurar o Ambiente

Copie o arquivo .env.example para um novo arquivo .env:

bash

cp .env.example .env

Edite o arquivo .env e adicione suas configurações específicas. Preencha as variáveis de ambiente conforme necessário.
4. Gerar a Chave de Aplicação

Gere a chave de aplicação do Laravel:

bash

php artisan key:generate

5. Configurar o Banco de Dados

Crie um banco de dados no MySQL e configure as informações no arquivo .env:

    DB_DATABASE=to_do
    DB_USERNAME=root
    DB_PASSWORD=hey-professor

6. Importar o Banco de Dados

Certifique-se de importar o banco de dados a partir do diretório correto. Se você estiver usando o MySQL, o arquivo SQL pode estar localizado no diretório database. Importe o arquivo para o seu banco de dados:

bash

mysql -u <seu_usuario> -p <nome_do_banco> < /caminho/para/o/arquivo.sql

Substitua <seu_usuario>, <nome_do_banco>, e /caminho/para/o/arquivo.sql com as informações corretas.
7. Rodar Migrações e Seeds

Execute as migrações e seeds para criar as tabelas necessárias e preencher o banco de dados com dados iniciais:

bash

php artisan migrate --seed

8. Compilar Assets

Compile os assets do projeto:

bash

npm run dev

9. Iniciar o Servidor

Inicie o servidor de desenvolvimento:

bash

php artisan serve

Acesse a aplicação em http://localhost:8000.
Funcionalidade Futura

O sistema de autenticação e autorização ainda não está implementado. No futuro, planeja-se adicionar:

    Autenticação de Usuário: Permitir que os usuários se registrem, façam login e gerenciem suas sessões.
    Autorização de Usuário: Implementar permissões e roles para gerenciar o acesso a diferentes partes da aplicação.
