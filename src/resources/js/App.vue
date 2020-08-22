<template>
    <div>
        <div>
            <SideBar v-if="!isLogin"/>
        </div>
        <router-view/>
    </div>
</template>

<script>
import SideBar from "./components/layout/SideBar"
import LayoutPagina from "./components/layout/LayoutPagina"
export default {
    components:{
        SideBar,
        LayoutPagina
    },

    computed: {
        isLogin() {
            return this.$route.name === 'login'
        }
    }
};
</script>
