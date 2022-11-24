<template>
    <div class="wrap">
		<h1>Escoge un producto</h1>
		<div class="store-wrapper">
			
			<section class="products-list">
				<div v-for="(producto,index) in productos" :key="index" 
				:class="producto.clase" :category="producto.categoria" @click="detalle(producto.nombre)">
					<img :src="producto.imagen" alt="" >
					<a href="#"> {{ producto.nombre }}</a>
				</div>
			</section>
		</div>
	</div>
</template>
<script setup>
	import { RouterLink, useRouter } from 'vue-router'
	import { ref } from 'vue'
	const router = useRouter()
	const productos = ref([
		{clase:"product-item", categoria:"vestimenta", imagen:"reme.jpg",url:"/reme.jpg",nombre:"Ropa de Niño"},
		{clase:"product-item", categoria:"vestimenta", imagen:"camisa.jpg",url:"/camisa.jng", nombre: "Ropa de Niño"},
		{clase:"product-item", categoria:"vestimenta", imagen:"camisas.jpeg",url:"/camisa.jng", nombre: "Ropa de Niño"},
		{clase:"product-item", categoria:"vestimenta", imagen:"ropa.jpg",url:"/camisa.jng", nombre: "Ropa de Dama"},
		{clase:"product-item", categoria:"ropa de niño", imagen:"hom.jpeg",url:"/camisa.jng", nombre: "Ropa de Caballero"},
	   
		{clase:"product-item", categoria:"zapateria", imagen:"cham.jpeg",url:"/championes", nombre:"Championes de Mujer"},
		{clase:"product-item", categoria:"zapateria", imagen:"zapatos.jpeg",url:"/zapatos", nombre: "Zapatos de Hombre"},
		{clase:"product-item", categoria:"audifonos", imagen:"audi.jpg",url:"/audifonos", nombre: "Audifonos"},
		{clase:"product-item", categoria:"audifonos", imagen:"jbl.jpg",url:"/audifonos", nombre:"Audifonos"},
		{clase:"product-item", categoria:"smartphones", imagen:"samsung_galaxy.jpg",url:"/samsungga", nombre: "Samsung galaxy"},
		{clase:"product-item", categoria:"smartphones", imagen:"iphone.jpg",url:"/iphone", nombre:"Iphone 7"},
		
		{clase:"product-item", categoria:"almacen", imagen:"alma.jpeg",url:"/pc ",nombre:"Almacen"},
		{clase:"product-item", categoria:"almacen", imagen:"almacen.png",url:"/lenovo", nombre:"Almacen"},
	])
	
	const detalle =(e,i)=>{
		router.push(`/categorias/${e}`)
	}
</script>
<style>

.category_list{
	display: flex;
	flex-direction: column;
	width: 18%;
	position: absolute;
	left: 80px;
	bottom: 18%;
}

.category_list .category_item{
	display: block;
	width: 90%;
	padding: 15px 0;
	margin-bottom: 20px;
	background: #e70808;
	

	text-align: center;
	text-decoration: none;
	color: #fff;
}
</style>
