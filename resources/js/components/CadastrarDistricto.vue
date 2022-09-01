<template>
<form >
<h1>Cadastro de Districtos</h1>
<strong>{{retorno}}</strong>
<div class="form-group">

      <input v-model="nome" type="text" placeholder="Nome">
      <label for="">Provincia</label>
    <select v-model="provincia" id="provincia" @change="ProvinciaMunicipios">
    <option v-for='(provincias) in provincias' ::key="provincias.id">{{provincias.nome}}</option>
</select>

     <label for="">Municipios</label>
    <select v-model="municipio" id="municipio" >
    <option v-for='(municipios) in municipios' ::key="municipios.id">{{municipios.nome}}</option>
</select>
      <button class="btn btn-primary" @click.prevent='cadastrarDistricto' >Cadastrar</button>
</div>

</form>

</template>

<script>
import axios from 'axios';

export default {
        data(){
            return{
                nome:'',
                provincia:'',
                retorno:'',
                provincias:'',
                municipio:'',
                municipios:''
        }

    },
    mounted() {
        this.CMunicipios();
        this.ProvinciaMunicipios();
    },

    methods:{
      CMunicipios(){
       axios.get('/consultarProvincias').then(response=>{

        this.provincias=response.data

    });

      },
      cadastrarDistricto(){
        axios.post('cadastrarDistricto',{nome:this.nome,provincia:this.provincia}).then(response=>{
            this.retorno = response.data;
        })


      },

      ProvinciaMunicipios(){
         var t = $("#provincia").val();

        axios.post('provinciaMunicipios/'+t).then(response=>{
        this.municipios=response.data
        })
      },

      cadastrarDistricto(){
        axios.post('cadastrar_districto',{
            nome:this.nome,
            municipio:this.municipio

        }).then(response=>{
            this.retorno=response.data;

        });
      },



    }
}
</script>

<style>

</style>
