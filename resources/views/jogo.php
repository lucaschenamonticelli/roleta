<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<style>
		button{
			background-color: #369;
		    color: #fff;
		    border: none;
		    padding: 15px 25px;
		    font-weight: 600;
		    border-radius: 5px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="app">
		<h1>Roleta</h1>
		<button @click="teste">Sortear Número</button>
		<p>
			<span v-if="resposta != ''">
				<strong>Número sorteado: </strong>
			</span> {{resposta}}
		</p>
		<p>
			{{erro}}
		</p>
	</div>
</body>
</html>

<script>
	var objeto = new Vue({
	  	el: '#app',
  		data: {
  			resposta: '',
  			erro: ''
  		},
  		methods: {
  			teste: function(){
  				const t = this
  				axios.get('/jogo/sorteio')
                .then(function (response) {
                    t.resposta = response.data
                })
                .catch(function (error) {
                    t.erro = error
                });
  			}
  		}
	})
</script>