<template>
    <div class="body-login">
        <div class="imagem-logo">
            <img class="imagem-logo" v-bind:src="'https://i.ibb.co/d0pCGpm/berto-d-d.png'">
            <div class="login">
                <div class="login-triangle"></div>

                <h2 class="login-header">Log in</h2>

                <form class="login-container">
                    <p><input type="email" placeholder="Email" v-model="usuario.email"></p>
                    <p><input type="password" placeholder="Senha" v-model="usuario.senha"></p>
                    <p><input type="submit" value="Login"></p>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            usuario: {
                email: "",
                senha: ""
            }
        }
    },

    mounted() {
        //
    },
    methods: {
        login() {
            this.axios
                // essa rota da api não existe ainda, coloquei
                // aqui só pra não ficar vazio
                .post('http://localhost:8000/api/login', this.usuario)
                .then(
                    (response) => (
                        this.$router.push({name: 'dashboard'})
                    )
                )
            .catch((error) => console.log(error))
            .finally(() => (this.loading = false));
        }
    }
}
</script>

<style>

html, .body-login{
   
    font-family: 'Open Sans', sans-serif;
}

.login {
    width: 400px;
    margin: 16px auto;
    font-size: 16px;
}

.login-header,
.login p {
    margin-top: 0;
    margin-bottom: 0;
}

.login-triangle {
    width: 0;
    margin-right: auto;
    margin-left: auto;
    border: 12px solid transparent;
    border-bottom-color: #28d;
}

.login-header {
    background: #28d;
    padding: 20px;
    font-size: 1.4em;
    font-weight: normal;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
}

.login-container {
    background: #ebebeb;
    padding: 12px;
}

.login p {
    padding: 12px;
}

.login input {
    box-sizing: border-box;
    display: block;
    width: 100%;
    border-width: 1px;
    border-style: solid;
    padding: 16px;
    outline: 0;
    font-family: inherit;
    font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
    background: #fff;
    border-color: #bbb;
    color: #555;
}

.login input[type="email"]:focus,
.login input[type="password"]:focus {
    border-color: #888;
}

.login input[type="submit"] {
    background: #28d;
    border-color: transparent;
    color: #fff;
    cursor: pointer;
}

.login input[type="submit"]:hover {
    background: #17c;
}

.login input[type="submit"]:focus {
    border-color: #05a;
}

.imagem-logo{
    width: 40%;
    height: 40%;
    /*background-repeat: no-repeat;*/
    /*background-size: contain;*/
    position: relative;
    margin: 16px auto;
    display: block;
}

</style>
