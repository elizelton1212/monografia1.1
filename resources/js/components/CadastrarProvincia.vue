<template>

<form >
<h1>Cadastro da Provincia</h1>
<strong>{{retorno}}</strong>
<div class="form-group">

      <input v-model="nome" type="text" placeholder="Nome">
      <button class="btn btn-primary" @click.prevent='cadastrarProvincia' >Cadastrar</button>
</div>

</form>


</template>

<script>
import axios from 'axios';

    export default {
        data(){
            return{
                nome:'',
                retorno:''
        }


            },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
cadastrarProvincia(){
    axios.post('cadastrar-provincia',{
        nome:this.nome
    }).then(response=>{
        this.nome='',
        this.retorno=response.data

    });
}

        }
    }
</script>
