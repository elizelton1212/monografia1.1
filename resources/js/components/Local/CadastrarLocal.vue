<template>

<form >
    <div></div>
    <div class="autoclosable-btn-success" role="alert">{{retorno}}</div>

 <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Dados do Local
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<div class="form-group">
    <input class="form-control" type="text" v-model="nome" placeholder="Nome" required>
</div>

<div class="form-group">

    <input class="form-control" type="tel" v-model="telefone" placeholder="Telefone" required>

</div>

<div class="form-group">
    <input class="form-control" type="email" v-model="email" placeholder="Email" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" v-model="site" placeholder="Site" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" v-model="nif" placeholder="NIF" required>
</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Dados da Localização
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 <label for="">Provincia</label>
   <select v-model="provincia" id="provincia" @change="ProvinciaMunicipios" required>
    <option v-for='(provincias) in provincias' ::key="provincias.id">{{provincias.nome}}</option>
</select>

<label for="">Municipio</label>
    <select v-model="municipio" id="municipio" @change="districtos_comuna_Municipio" required>
    <option v-for='(municipios) in municipios' ::key="municipios.id">{{municipios.nome}}</option>
</select>

<label for="">Districto</label>
    <select v-model="districto" id="municipio">
    <option v-for='(districtos) in districtos' ::key="districtos.id">{{districtos.nome}}</option>
</select>

<label for="">Comuna</label>
    <select v-model="comuna" id="municipio" >
    <option v-for='(comunas) in comunas' ::key="comunas.id">{{comunas.nome}}</option>
</select>

<div class="form-group">

    <input class="form-control" v-model="bairro" placeholder="Bairro" required>
</div>

<div class="form-group">

    <input class="form-control" type="text" v-model="rua" placeholder="Rua" required>
</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Categória
      </button>


    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 <label for="">Categoria</label>
    <select v-model="categoria" id="municipio" required>
    <option v-for='(categorias) in categorias' ::key="categorias.id">{{categorias.nome}}</option>
</select>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-primary" id="registar" @click.prevent="ResgistarLocal">Registrar</button> <button class="btn btn-warning" type="reset">Limpar</button>
</form>
</template>

<script>
import axios from 'axios';
import $ from 'jquery';

$('.alert-autocloseable-success').hide();
export default {
        data(){
            return{
                provincias:'',
                provincia:'',
                municipios:'',
                municipio:'',
                districtos:'',
                comunas:'',
                categorias:'',
                nome:'',
                telefone:'',
                email:'',
                site:'',
                nif:'',
                categoria:'',
                retorno:''
            }
        },
     mounted(){

        this.consultarCategorias();
            this.Cprovincias();
        this.ResgistarLocal();

            this.ProvinciaMunicipios();
            this.districtos();
            this.Comunas();

            },
        methods:{

            ResgistarLocal(){
                $('.alert alert-primary').hide();
             axios.post('cadastrarLocal',{

              provincia:this.provincia,
              municipio:this.municipio,
              comuna:this.comuna,
              nome:this.nome,
              telefone:this.telefone,
              email:this.email,
              site:this.site,
               nif:this.nif,
               categoria:this.categoria
             }).then(response=>{

                this.retorno=response.data})

                if(this.retorno!= ''){

                    $('#autoclosable-btn-success').click(function() {
			$('#autoclosable-btn-success').prop("disabled", true);
			$('.alert-autocloseable-success').show();

			$('.alert-autocloseable-success').delay(5000).fadeOut( "slow", function() {
				// Animation complete.
				$('#autoclosable-btn-success').prop("disabled", false);
			});
		});

                }


            },

            consultarCategorias(){

axios.get('/categorias').then(response=>{
    this.categorias=response.data
})
},

    Cprovincias(){
       axios.get('/consultarProvincias').then(response=>{

        this.provincias=response.data

    });

        },


         ProvinciaMunicipios(){
         var t = $("#provincia").val();

        axios.post('provinciaMunicipios/'+t).then(response=>{
        this.municipios=response.data
        })
      },

       districtos_comuna_Municipio(){
  var t = $("#municipio").val();
        axios.get('consultarDistritos/'+t,{

        }).then(response=>{
            this.Comunas(t)
            this.districtos=response.data;
        })


      },

      Comunas(municipio){

        axios.get('consultarComunas/'+municipio).then(response=>{
            this.comunas=response.data
        })

      },


}}
</script>

<style>

</style>
