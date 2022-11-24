<template>
    <div>
        <h1>{{ this.$route.params.nombre}}</h1> 
    </div>
</template>
<script setup>
    import { useRoute} from 'vue-router'
    const route = useRoute()
   console.log(route.params.nombre)
   
</script>