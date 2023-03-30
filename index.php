<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documenat</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    text-decoration: none;
}

body{
    background-image:  linear-gradient( rgb(9, 23, 34),rgb(48, 24, 138), rgb(5, 24, 58));
    width: 100vw;
    height: 100vh;
}

.cont{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #fff;
    display: inline-flex;
 }
 .g{
    background: linear-gradient( rgb(19, 18, 26),rgb(49, 49, 51), rgb(19, 18, 26));
    display: flex;
    flex-direction: column;   
    width: 340px;
    height: 590px;
    border-radius: 8px 0px 0px 8px; 
    
}
.Nota{
    background-color: rgb(62, 65, 64);
    border-radius: 0px 8px 8px 0px ;
    width: 180px;
}
input{
    background-color: #bfc9bd;
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    border-radius: 4px;
    align-self: center;
    width: 220px;
 }
 .s2{
     display: flex;
     flex-direction: column;
     align-self: center;
     margin-top: 10px ;
 }
 .a1{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 4px;
    color: white;
    font-size: 19px;
    margin-top: 35px;
    width: 250px;
    align-self: center;
}
 .a1:hover{
    background-color: deepskyblue;
    cursor: pointer;
 }
 
 .h{
     align-items: center;
     align-self: center;
     align-content: center;
     margin-top: 15px;
 }
.result{
    margin: 8px;
}

</style>
<body>
  <form action="" method="post">
    <div class="bgcor">
      <div class="cont">
        <div class="g">


          <h2 class="h">ATVVVVV</h2>

          <div class="s2">
            <label>Nome do cliente:</label>
            <input type="text" name="nome_cliente" placeholder="Nome do Cliente">
          </div>
          <div class="s2">
            <label>Primeiro produto:</label>
            <input type="text" name="produto1" placeholder="Nome do 1º Produto">
          </div>
          <div class="s2">
            <label>Valor do primeiro produto:</label>
            <input type="number" name="valor1" placeholder="Valor do 1º Produto">
          </div>
          <div class="s2">
            <label>Segundo produto:</label>
            <input type="text" name="produto2" placeholder="Nome do 2º Produto">
          </div>
          <div class="s2">
            <label>Valor do segundo produto:</label>
            <input type="number" name="valor2" placeholder="Valor do 2º Produto">
          </div>
          <div class="s2">
            <label>Valor pago pelo cliente:</label>
            <input type="number"  name="valor_pago" placeholder="Valor Pago">
          </div>

          <input type="submit" class="a1" name="submit" value="Resultado">

        </div>
        <div class="Nota">

          <center><h2>Nota</h2></center>
          <hr>

          <div class="result">
            <?php
            $nome = $_POST['nome_cliente'];

            $produto1 = $_POST['produto1'];
            $valor1 = $_POST['valor1'];

            $produto2 = $_POST['produto2'];
            $valor2 = $_POST['valor2'];

            $valor_pago = $_POST['valor_pago'];

            $valor_total = $valor1 + $valor2;

            echo "Nome do cliente: $nome <br>";

            echo "Nome do primeiro produto: $produto1 <br>";

            echo "Valor do primeiro produto: $valor1 <br>";

            echo "Nome do segundo produto: $produto2 <br>";

            echo "Valor do segundo produto: $valor2 <br>";

            echo "Valor total: $valor_total <br>";

            if ($valor_total <= $valor_pago) {

              $troco = $valor_pago - $valor_total;
              echo "Valor pago: $valor_pago <br>";
              echo "Troco: $troco <br>";
            } else {
              $falta = $valor_total - $valor_pago;
              echo "Valor pago: $valor_pago <br>";
              echo "Falta: $falta <br>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
