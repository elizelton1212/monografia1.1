<template>
    <div>

    <button class="btn btn-primary" @click.prevent='texte'> Enviar </button>
        <p>
            {{retorno}}
        </p>
    </div>
</template>
<script>
export default {
    data() {
        return {
        retorno : ""

        }
    },

    mounted() {

    },

    methods: {
    texte(){
    axios.get("Rota").then(respose=>{this.retorno=respose.data})
    },

    },
}
</script>
