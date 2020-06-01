<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de Cadastro</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/estilo.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>

		<div class='console-container'>
			<span id='text'></span>
			<div class='console-underscore' id='console'>&#95;</div>
		</div>

		<section class="container">
			<div class="cards">

				<div class="card">
				<div class="face face1">
					<div class="content">
						<i class="fa fa-users fa-4x"></i>
						<h3>Tipos de Usuário</h3>
					</div>
				</div>
				<div class="face face2">
					<div class="content">
						<p>Cadastro e configurações de tipos de usuários</p>
						<a href="tipos/area-tipos.php">Entrar</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="face face1">
					<div class="content">
						<i class="fa fa-user fa-4x"></i>
						<h3>Usuários</h3>
					</div>
				</div>
				<div class="face face2">
					<div class="content">
						<p>Cadasdro e configurações de tipos de usuários</p>
						<a href="users/area-user.php">Entrar</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="face face1">
					<div class="content">
						<i class="fa fa-key fa-4x"></i>
						<h3>Área Segura</h3>
					</div>
				</div>
				<div class="face face2">
					<div class="content">
						<p>Entre na área segura do nosso sistema</p>
						<a href="area-segura.php">Entrar</a>
					</div>
				</div>
			</div>
				
			</div>
		</section>

     <script type="text/javascript">
     	// function([string1, string2],target id,[color1,color2])    
		 consoleText(['Olá galera!!', 'Vamos aprender programação!!', 'Sistema de Cadastro de Usuários'], 'text', ['tomato','#ff0','lightblue']);

		function consoleText(words, id, colors) {
		  if (colors === undefined) colors = ['#fff'];
		  var visible = true;
		  var con = document.getElementById('console');
		  var letterCount = 1;
		  var x = 1;
		  var waiting = false;
		  var target = document.getElementById(id)
		  target.setAttribute('style', 'color:' + colors[0])
		  window.setInterval(function() {

		    if (letterCount === 0 && waiting === false) {
		      waiting = true;
		      target.innerHTML = words[0].substring(0, letterCount)
		      window.setTimeout(function() {
		        var usedColor = colors.shift();
		        colors.push(usedColor);
		        var usedWord = words.shift();
		        words.push(usedWord);
		        x = 1;
		        target.setAttribute('style', 'color:' + colors[0])
		        letterCount += x;
		        waiting = false;
		      }, 1000)
		    } else if (letterCount === words[0].length + 1 && waiting === false) {
		      waiting = true;
		      window.setTimeout(function() {
		        x = -1;
		        letterCount += x;
		        waiting = false;
		      }, 1000)
		    } else if (waiting === false) {
		      target.innerHTML = words[0].substring(0, letterCount)
		      letterCount += x;
		    }
		  }, 120);

		  window.setInterval(function() {
		    if (visible === true) {
		      con.className = 'console-underscore hidden'
		      visible = false;

		    } else {
		      con.className = 'console-underscore'

		      visible = true;
		    }
		  }, 400);
		}
     </script>

	</body>
</html>