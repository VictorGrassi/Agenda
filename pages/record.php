<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Agenda</title>
</head>

<body>
    <header>
        <h1 class="tittle">JN Moura - Agenda</h1>
    </header>
    <main>
        <h1>Adicionar registro</h1>
        <hr>
        <section>
            <form action="../connection/insert.php" method="POST">
                <label for="lblName">Nome: </label>
                <input type="text" required="required" name="txtName" maxlength="60" placeholder="Nome da pessoa" />
                <p><label for=lblPhone>Telefone/Celular: </label>
                    <input type="tel" required="required" name="txtPhone" maxlength="20" placeholder="(00)12345-6789" />
                </p>
                <p><label for=lblAddress>Endereço: </label>
                    <input type="text" required="required" name="txtAddress" maxlength="100" placeholder="Rua Tal, Nº000" />
                </p>
                <input type="submit" value="Adicionar registro" name="btnAdd">
            </form>
            <p><a href="home.php">&cularr; Voltar a lista</a></p>
        </section>
    </main>
    <footer>
        <p>&copy;JN Moura & Victor Grassi, 2021</p>
    </footer>
</body>

</html>