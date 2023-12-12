<HTML>
	<HEAD>
		<TITLE> Cadastrar Destaque </TITLE>
		<META charset="UFT-8" />
	</HEAD>
	
	<BODY>
		<H1> Cadastrar Destaque </H1>
		
		<FORM action="destaque.php?fun=cadastrar" method="POST" enctype="multipart/form-data">
		<!-- POST -> envio de informações escondidas -->
		<LABEL for="titulo"> Titulo: </LABEL> 
		<input type="text" name="titulo" id="titulo"><br>

		<LABEL for="texto"> Texto: </LABEL> 
		<textarea type="text" name="texto" id="texto"></textarea><br>

		<label for="data_criacao">Data Criacao</label>
		<input type="date" name="data_criacao" id="data_criacao">

		<label for="foto">Choose a profile picture:</label>
		<input type="file" id="foto" name="foto" accept="image/png, image/jpeg" />
		
		<input type="submit" name="enviar" value="enviar">

		</FORM>
	
	</BODY>

</HTML>