<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atividade pratica 2</title>
    <meta charset="utf-8"/>
</head>
<body>
    <form class="dados" action="Validar.php" method="post"> 

        <b><p3>ATIVIDADE PRATICA 2</P3></b>

        <div class="field" style = "margin-left: 10px; margin-top: 5px">
            <label for="nome">Informe seu nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>
        
        <div class="field" style = "margin-left: 10px; margin-top: 5px">
            <label for="nome">Informe seu endereço:</label>
            <input type="text" id="end" name="end" placeholder="Digite seu endereço*" required>
        </div>

        <div class="field" style = "margin-left: 10px; margin-top: 5px">
            <label for="nome" >Informe sua cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade*" required>
        </div>

        <div class="field"  style = "margin-left: 10px; margin-top: 5px">
            <label for="nome">Informe seu estado:</label>
            <input type="text" id="estado" name="estado" placeholder="Digite seu estado*" required>
        </div>  

        <div class="field"  style = "margin-left: 10px; margin-top: 5px">
            <label for="number">Informe seu CEP:</label>
            <input type="number" id="cep" name="cep" placeholder="Digite seu CEP*" required>
        </div>  

        <div class="field"  style = "margin-left: 10px; margin-top: 5px">
            <label for="number">Informe o telefone:</label>
            <input type="number" id="tel" name="tel" placeholder="Informe seu telefone">
        </div>  

        <div class="field"  style = "margin-left: 10px; margin-top: 5px">
            <label for="number">Informe o Celular:</label>
            <input type="number" id="cel" name="cel" placeholder="Informe seu celular*" required>
        </div>
        <div  style = "margin-left: 10px; margin-top: 3px; " >  
            <p1>RG:</p1 >
                <input  type = "text" name="rg" placeholder="campo obrigatório*" required>

            <p2>CPF:</p2 >
                <input  type = "text" name="cpf" placeholder="campo obrigatório*" required>

            <p1 >PIS:</p1 >
                <input  type = "text" name="pis" placeholder="campo obrigatório*" required>
        </div >

        <input type="submit" name= "acao" value="Enviar">
    </form>
</body>
</html>