<?php include('layout/header.html');?>
<?php include('layout/navbar.php'); ?>
<?php include("recursos.php"); ?>

<div class="container"  class="mx-auto"> 
    <div class="content-wrap">
        <div class="card card-header" id="card-style">

			<form action="cadEmprestimosBD.php" method="post">

                <!--
			    <div class="form-group">
			      <label>Livro</label>
 			      <select name="txtLIVRO_ISBN" class="form-control">

					<php
						require_once("conexao/conexao.php");

						$select = $conexao->query("SELECT TITULO, ISBN FROM LIVROS ORDER BY TITULO");
						$resultado = $select->fetchAll();

						if($resultado)
						{
						     foreach ($resultado as $linha) 
						     {
					?>

    			        <option value="<php echo $linha["ISBN"];?>"><php echo 	$linha["TITULO"];?></option>
					<php }} ?>

			      </select>
			    </div>-->


			  <div class="form-group">
			    <label>ISBN</label>
			    <input type="text" class="form-control" name="txtLIVRO_ISBN" placeholder="Informe o ISBN do usuário" >
			  </div>


			  <div class="form-group">
			    <label>CPF</label>
			    <input type="text" class="form-control" name="txtCPF_PESSOA" placeholder="Informe o CPF do usuário" id="cpf_usuario" onblur="">
			  </div>

			  <!--<div class="form-group">
			    <label>Nome</label>
			  <input class="form-control" id="nome_usuario" type="text" placeholder="" disabled>
			</div>-->

			  <div class="form-group">
			    <label >Data do Empréstimo</label>

			  <input class="form-control" id="data_emprestimo" name= "txtDATA_EMPRESTADO" type="text" value="<?php obter_data_dd_mm_yyyy() ?>"> 
			</div>

			  <div class="form-group">
			    <label>Dias que o livro permanecerá emprestado</label>
			  <input class="form-control" name="txtTEMPO_EMPRESTIMO" type="text" placeholder="Quantos dias o livro ficará emprestado">
			</div>


		  <button type="button" class="btn btn-danger" onclick="history.go(-1)">Cancelar</button>
		  <button type="submit" class="btn btn-success" >Emprestar</button>
		  <!-- type="submit-->

			</form>
		</div>
	</div>
</div>

<?php include('layout/footer.html');?>