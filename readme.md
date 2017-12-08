## Informações do Projeto
* No inicio do projeto já possuia conhecimetos de MVC, porém nenhum contato com Laravel até então, minha fonte de pesquisa foi um livro em pdf que também está em anexo nesse projeto, "PHP e Laravel - Crie aplicações web como um verdadeiro artesão", sem falar na própria documentação do Laravel, e várias outras fontes de resultado das minhas pesquisa que teve conforme a minhas necessidades.
* Apesar de não está muito familiarizado com o Laravel, procurei aproveitar ao máximo dele, do que pude, já que ele possui prosedimentos já testados e otimizados.

## Observações
* UUID foi tentato usa-lo, potém com o tratamento que ele requer se tornou muito mais complicado para desenolver o projeto, devido a isso, optei por fazer o projeto sem ele, se houver tempo sobrando para a entraga do projeto vou a tentar trabalhar com ele novamente, caso contrario foi esse o motivo.

## Banco de Dados
* Porque não useu SEEDER do Laravel? Depois de aprende-lo não me senti a vontade de usá-lo, pelo menos por enquanto.
* Configuração:
    - copie tudo que esta no arquivo .env.example e crie um arquivo .env
    - vamos configurar o .env do banco, no meu caso usei MariaBD(MySQL) que vem junto ao xampp.
    - DB_DATABASE=crud_laravel
    - DB_USERNAME=root
    - DB_PASSWORD=
    - o resto pode deixar o jeito que vem no .env.example.
    - bastata anexar o arquivo crud_laravel.sql que esta na raiz do projeto ao banco de dados.

* Com essa configuração já havera alguns registros para testes.
    
## Validação do CPF
* nele usei um projeto disponivel no github sugerido por forum de programação que achei ao pesquisar o assunto no google.
* rodei esse comando - composer require codeedu/code_validator:0.0.2
* como diz a documentação utiliza-se de um componete do zend para fazer a verificação
* o procedimento de como usá-lo foi copiado, não tenho certeza se essa é a melhor maneira.

## Procedimento de como usar o sistema
