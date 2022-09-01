<template>
<form >
<h1>Cadastro de Municipio</h1>
<strong>{{retorno}}</strong>
<div class="form-group">

      <input v-model="nome" type="text" placeholder="Nome">
      <label for="">Provincia</label>
    <select v-model="provincia" >
    <option v-for='(provincias) in provincias' ::key="provincias.id">{{provincias.nome}}</option>
</select>
      <button class="btn btn-primary" @click.prevent='cadastrarMunicipio' >Cadastrar</button>
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
                provincias:''
        }

    },
    mounted() {
        this.Cprovincias();
    },

    methods:{
      Cprovincias(){
       axios.get('/consultarProvincias').then(response=>{

        this.provincias=response.data

    });

      },
      cadastrarMunicipio(){
        axios.post('cadastrarMunicipio',{nome:this.nome,provincia:this.provincia}).then(response=>{
            this.retorno = response.data;
        })


      }

    }
}
</script>

<style>

</style>
