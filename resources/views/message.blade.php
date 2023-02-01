
<h2 style="font-family: 'arial', sans-serif;">
	Nova mensagem vinda do Formulario no site portifolio
</h2>

<hr>

<p style="font-family: 'arial', sans-serif;"><strong>Nome: </strong>{{ $data['name'] }}</p>
<p style="font-family: 'arial', sans-serif;"><strong>Email: </strong>{{ $data['email'] }}</p>

<hr>
	
<p style="font-family: 'arial', sans-serif;"><strong style="margin-bottom: 5px">Mensagem: </strong><br>{{ $data['topic'] }}</p><br>