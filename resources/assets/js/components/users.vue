<script>
    export default{

    data() {
        return {
            list: [],
            sortProperty: 'name',
            sortDirection: 1,
            users:[]
        }
    },

    mounted(){

            this.$http.get('/api/usuarios/listar').then((req) => this.users = req.data)
        },
        methods:{
            consulta: function(){
                console.log('Consulta');
                this.$http.get('/api/usuarios/listar').then(
                    (req) =>
                        this.users = req.data
                )
            },

            limpar: function(){
                this.users = [];
            }
        }
    }

</script>

<template>
    <div>
        <input type="text"/><button type="button" class="btn button-btn" v-on:click="consulta()">Consultar</button><button type="button" class="btn button-btn" v-on:click="limpar()">Limpar</button>
        <table class="table table-bordered table-striped table-hover">
             <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
             </thead>
             <tbody>
                <tr v-for="u in users">
                    <td>{{ u.name  }}</td>
                    <td>{{ u.email  }}</td>
                </tr>
             </tbody>

            </table>
    </div>
</template>
<style scoped=""></style>