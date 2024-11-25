<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script type="text/javascript" src="../Javascript/consulta.js"></script>
    <link rel="stylesheet" href="../css/Consult.css">

    <title>Consulta Cliente</title>
</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Javascript/consulta.js"></script>

    <div class="container">
    <div class="BoxCpf">
        <input type="search" class="form-control w-25" name="Cpf" id="Cpf" placeholder="Digite seu CPF">
        </button>
    </div>
        <div class="box">
            <form action="ClienteConsulta.php" method=" POST">
                <fieldset>
                    <legend><b></b>CONSULTAR<b></b></legend>
                    <br>
                    <div class="inputBox">
                        <label for="Nome" class="labelInput">Nome</label>
                        <input type="text" name="Nome" id="Nome" class="inputUser" required>
                        <br><br>
                        <!-- <div class="inputBox">
                            <label for="E_mail" class="labelInput">E-mail</label>
                            <input type="text" name="E_mail" id="E_mail" class="inputUser">
                            <br><br> 
                            <div class="inputBox">
                                <label for="Telefone" class="labelInput">Telefone</label>
                                <input type="text" name="Telefone" id="Telefone" class="inputUser">
                            </div> 
                            <br><br> -->
                            <div class="inputBox">
                                <label for="Tipo_Servico" class="labelInput">Tipo de Serviço</label>
                                <input type="text" name="Tipo_Servico" id="Tipo_Servico" class="inputUser">
                            </div>
                            <br><br>
                            <div class="DataHorario">
                                <label for="Data_Horario">Data - Horario</label>
                                <input type="datetime-local" name="Data_Horario" id="Horario">
                            </div>
                            <br><br>
                            <!-- <button name="Cancelar" type="submit" id="submits">Cancelar</button> -->
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>