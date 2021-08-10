# Agenda
Agenda telefônica - JN MOURA

Passo a passo para o uso:

1º Com os recursos do MySQL instalados e os arquivos nos locais corretos, execute os comandos MySQL do arquivo “jnmoura.sql”, contido dentro da pasta “database”.

2º Acessar o arquivo “connection.php”, dentro da pasta connection e então mude o host, user e password se for necessário.

3º Ao acessar o projeto, o “index.php” nos redireciona para “home.php”, nesta página, podemos realizar a adição de um novo registro na agenda clicando no botão "Adicionar novo registro".

4º Deverá ser informado o nome (limitado a 60 caracteres), número (limitado a 20 caracteres) e endereço (limitado a 100 caracteres) da pessoa, então clicamos em "Adicionar registro".

5º Todos os registros são exibidos no “home.php”. Adicione mais registros para utilizar a busca. Podemos pesquisar por um nome, sobrenome ou até parte de um nome e clicar em “Buscar”, para listar os resultados.

6º Ao clicar no ícone de engrenagem, na coluna “Alterar” e na linha do registro, podemos alterar o nome, telefone e/ou endereço. Altere uma ou mais informações e clique em “Alterar”.

7º Ao clicar no ícone da lixeira, na coluna “Excluir” e na linha do registro que deseja excluir, será exibida uma mensagem de confirmação de exclusão, informando todos os dados do registro a ser excluído. Clicando em não, apenas somos redirecionados para a página home, clicando em sim, o registro é excluindo e após sermos redirecionados, já não vemos o registro na lista.
