<template>
    <div>
        <div>
        
        
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
    }
};
</script>