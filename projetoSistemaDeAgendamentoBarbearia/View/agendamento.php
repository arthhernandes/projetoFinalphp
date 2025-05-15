<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="View/style.css">
    <script src="mascaras.js" defer></script>
</head>
<body>
    <!-- ajustar action conforme criação da página -->
    <!-- ajustar formulário conforme criação da página -->
    <form method="POST" action="cadastrarUsuario">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo"><br><br>

        <label >Estado civil:</label>
        <select name="estadoCivil" id="estadoCivil">
            <option value="Casado">Casado</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Não Informar">Não informar</option>
        </select><br><br>

        <label>Data de nascimento:</label>
        <input type="text" name="dataNascimento" id="dataNascimeto" placeholder="dd/mm/AAAA" maxlenght="20">

        <label>Estado de nascimento</label>
        <input type="text" name="estadoNascimento" id="estadoNascimento" placeholder="">

        <label>CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe seu CPF:" maxlenght="14" onkeyup="mascaraCPF()"><br><br>

        <label>Profissão:</label>
        <input type="text" name="">
    </form>
</body>
</html>