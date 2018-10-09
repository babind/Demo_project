<template>
   <tr>
        <td>{{name}}</td>
        <td>{{price}}</td>
        <td>{{bedrooms}}</td>
        <td>{{bathrooms}}</td>
        <td>{{storeys}}</td>
        <td>{{garages}}</td>
    </tr>
</template>

<script>
    export default {
        props : ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages']
    }
</script>