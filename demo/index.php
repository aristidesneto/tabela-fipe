<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tabela FIPE</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
        .container {
           max-width: 960px;
        }
    </style>
</head>
<body>

	<div id="app">

		<div class="d-flex flex-column flex-md-row fixed-top align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
			<h5 class="my-0 mr-md-auto font-weight-normal">Tabela FIPE</h5>
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="https://github.com/aristidesneto/tabela-fipe" target="_blank">Github</a>
			</nav>
		</div>

		<div class="px-3 py-3 pt-md-5 pb-md-4 mt-4 mx-auto text-center">
			<h1>Consulta Tabela FIPE</h1>
		</div>

		<div class="container">
			<div class="row justify-content-between">
				<div class="col-6">
					<form>

                        <div class="form-group row">
							<label class="col-sm-3 col-form-label">Veículo</label>
							<div class="col-sm-8">
								<select name="veiculo" id="veiculo" v-model="veiculoSelected" class="form-control" @change="getMarca($event)">
                                    <option value="">Selecione</option>
                                    <option value="cars">Carros</option>
                                    <option value="trucks">Caminhões</option>
                                    <option value="motorcycle">Motos</option>
                                </select>
                            </div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Marca</label>
							<div class="col-sm-8">
								<select name="marcas" id="marcas" :disabled="marcas == ''" v-model="marcaSelected" class="form-control" @change="getModelo($event)">
                                    <option value="">Selecione</option>
                                    <option :value="marca.codigo" v-for="marca in marcas" >{{ marca.nome }}</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <img src="/img/load.gif" v-if="loading1 == true" class="img-responsive" width="15">
                            </div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Modelo</label>
							<div class="col-sm-8">
								<select name="modelos" id="modelos" :disabled="modelos == ''" v-model="modeloSelected" class="form-control" @change="getAno($event)">
                                    <option value="">Selecione</option>
                                    <option :value="modelo.codigo" v-for="modelo in modelos">{{ modelo.nome }}</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <img src="/img/load.gif" v-if="loading2 == true" class="img-responsive" width="15">
                            </div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Ano</label>
							<div class="col-sm-8">
								<select name="anos" id="anos" :disabled="anos == ''" v-model="anoSelected" class="form-control" @change="getPreco($event)">
                                    <option value="">Selecione</option>
                                    <option :value="ano.codigo" v-for="ano in anos">{{ ano.nome }}</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <img src="/img/load.gif" v-if="loading3 == true" class="img-responsive" width="15">
                            </div>
                        </div>

					</form>

				</div>
				<div class="col-5">
                    <img src="./img/load.gif" v-if="loading4 == true" class="img-responsive" width="25">
					<div v-if="preco != ''">
                        <p>
                            <strong>Valor:</strong> {{ preco.Valor }}</br>
                            <strong>Marca:</strong> {{ preco.Marca }}</br>
                            <strong>Modelo:</strong> {{ preco.Modelo }}</br>
                            <strong>Ano:</strong> {{ preco.AnoModelo }}</br>
                            <strong>Combustível:</strong> {{ preco.Combustivel }}</br>
                            <strong>Código:</strong> {{ preco.CodigoFipe }}</br>
                            <strong>Mês referência:</strong> {{ preco.MesReferencia }}
                        </p>
                    </div>
				</div>
			</div>
		</div>


	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script>
		var app = new Vue({
			el: '#app',
			data: {
				title: 'Tabela FIPE',
                marcaSelected: '',
                modeloSelected: '',
                anoSelected: '',
                veiculoSelected: '',
                marcas: [],
                modelos: [],
                anos: [],
                preco: [],
                loading1: false,
                loading2: false,
                loading3: false,
                loading4: false,
			},
			methods: {
				getMarca: function (event) {

                    this.disabledAll();
                    this.marcaSelected = '';
                    this.modeloSelected = '';
                    this.anoSelected = '';
                    this.loading1 = true;


                    const params = new URLSearchParams();
                    params.append('veiculo', event.target.value);
                    params.append('search', 'marca');

					axios.post('getData.php', params)
						.then(response => {
                            this.marcas = response.data;
                            this.loading1 = false;
						})
						.catch(error => {
							console.log(error);
						});
				},
                getModelo: function (event) {

                    this.disabledAll();
                    this.modeloSelected = '';
                    this.anoSelected = '';
                    this.loading2 = true;

                    const params = new URLSearchParams();
                    params.append('veiculo', this.veiculoSelected);
                    params.append('marca', event.target.value);
                    params.append('search', 'modelo');

                    axios.post('getData.php', params)
						.then(response => {
                            this.modelos = response.data.modelos;
							this.loading2 = false;
						})
						.catch(error => {
							console.log(error);
						});
                },
                getAno: function (event) {

                    this.preco = '';
                    this.anoSelected = '';
                    this.loading3 = true;

                    const params = new URLSearchParams();
                    params.append('veiculo', this.veiculoSelected);
                    params.append('marca', this.marcaSelected);
                    params.append('modelo', event.target.value);
                    params.append('search', 'ano');


                    axios.post('getData.php', params)
						.then(response => {
                            this.anos = response.data;
                            this.loading3 = false;
						})
						.catch(error => {
							console.log(error);
						});
                },
                getPreco: function (event) {

                    this.preco = '';
                    this.loading4 = true;

                    const params = new URLSearchParams();
                    params.append('veiculo', this.veiculoSelected);
                    params.append('marca', this.marcaSelected);
                    params.append('modelo', this.modeloSelected);
                    params.append('ano', event.target.value);
                    params.append('search', 'preco');

                    axios.post('getData.php', params)
						.then(response => {
                            this.preco = response.data;
							this.loading4 = false;
						})
						.catch(error => {
							console.log(error);
						});
                },
                disabledAll: function () {
                    this.modelos = '';
                    this.anos = '';
                    this.preco = '';
                }
			},
		});
	</script>

</body>
</html>
