<template>
    <div class="body-login">
        <b-form @submit.prevent="login">
            <div class="imagem-logo">
                <img class="imagem-logo" v-bind:src="'https://i.ibb.co/d0pCGpm/berto-d-d.png'">
                <div>
                  <b-alert show dismissible v-model="showAlert" variant="danger">Não foi possível efetuar o login. Verifique seus dados.</b-alert>
                </div>
                <div class="login">
                    <div class="login-triangle"></div>

                    <h2 class="login-header">Log in</h2>

                    <b-form-group class="login-container">
                        <b-form-input required type="email" placeholder="Email" v-model="usuario.email"></b-form-input>
                        <br>
                        <b-form-input required type="password" placeholder="Senha" v-model="usuario.senha"></b-form-input>
                        <br>
                        <input type="submit" value="Login">
                    </b-form-group>
                </div>
            </div>
        </b-form>
    </div>
</template>

<script>

export default {
    data() {
        return {
            usuario: {
              email: '',
              senha: ''
            },
            showAlert: false
        }
    },

    mounted() {
        //
    },
    created() {

    },

    /*
        ATENÇÃO: o método de login abaixo
        é experimental e a nível de DEMONSTRAÇÃO,
        e não deverá ser seguido de exemplo. Os dados
        não são mascarados, estando em plain text.
     */

    methods: {
        login(){
            this.axios
                .post('http://localhost:8000/api/login', this.usuario)
                .then(
                    (response) => {
                        this.$router.push({name: 'dashboard'});
                    }
                )
                .catch((error) => {
                    this.showAlert = true;
                })
                .finally(() => {
                    this.loading = false;
                    sessionStorage.setItem('email', JSON.stringify(this.usuario.email));
                    sessionStorage.setItem('senha', JSON.stringify(this.usuario.senha));
                });
        },
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
