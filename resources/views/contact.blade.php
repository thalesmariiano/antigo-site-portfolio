<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/arquivos/css/styles.css">
	<title>Send email form</title>
</head>
<body>
	<h1>Contato</h1>

	<form action="{{ url('/')}}" method="POST">
		@csrf

		@if(count($errors) > 0)
			<p><strong>Preencha todos os campos corretamente!</strong></p>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

		@if($message = Session::get('sucess'))
			<p><strong>Obrigado!</strong> {{ $message }}!</p>
		@endif

		@if($message = Session::get('error'))
			<p><strong>OOOOPPPPSSS!</strong> {{ $message }}!</p>
		@endif

		<input type="text" name="nome" placeholder="Seu Nome" autocomplete="off"><br>
		<input type="email" name="email" placeholder="Seu Email" autocomplete="off"><br>
		<input type="text" name="assunto" placeholder="Assunto" autocomplete="off"><br>
		<textarea placeholder="Sua Mensagem" name="mensagem"></textarea><br>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>