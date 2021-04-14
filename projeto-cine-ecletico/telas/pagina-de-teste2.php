
<?php 
require_once dirname(__DIR__) . '/componentes/header.php';
require_once dirname(__DIR__) . '/componentes/menu.php'; 
require_once dirname(__DIR__) . '/componentes/formulario.php';
?>
	<h1>Primeiro Titulo</h1>
	<h2>Segundo titulo</h2>
	<p><b>testando formatação de texto, <i>&quot;algo dito por alguem&quot;:</i> joao das neves;</b></p>
	<dl>
		<dt>Unidade 01</dt>
		<dd>Apresentação do projeto</dd>
		<dt>unidade 01</dt>
		<dd>Dsenvolvimento do projeto</dd>
		<dt>unidade 03</dt>
		<dd>conclusao do projeto e agradecimento</dd>
	</dl>
	<ol type="I">
		<li>cerveja</li>
		<ul>
			<li>preta</li>
			<li>artesanal</li>
			<li>puro malte</li>
		</ul>
		<li>vinho</li>
		<ul>
			<li>branco</li>
			<li>tinto</li>
			<li>seco</li>
			<li>demisec</li>
			<li>espumante</li>
		</ul>
		<li>cachaça</li>
		<li>wiskie</li>
	</ol>
	<ul id="listadetrilhas">
		<li><a href="">trilhas Faceis</a></li>
		<li><a href="">trilhas Medias</a></li>
		<li><a href="">trilhas dificeis</a></li>
		<li><a href="">Picos em Minas gerais</a></li>
		<li><a href="">travessias</a></li>
	</ul>
	<select name ="estadoID" id="estadoID">
		<option value="1">Manaus</option>
		<option value="2">Sao Paulo</option>
		<option value="3" selected>Minas Gerais</option>
		<option value="4">Ceara</option>
	</select>

<?php require_once dirname(__DIR__) . '/componentes/footer.php' ?>