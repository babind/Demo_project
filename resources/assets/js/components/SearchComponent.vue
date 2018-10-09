<template>
    <div class="search-form">
        Search criteria
        <div class="form-item">
            <input type="text" v-model="name" class="form-control" placeholder="Name" />
        </div>
        <div class="row form-item">
            <div class="col-sm-6">
                <input type="text" v-model="bedrooms" class="form-control" placeholder="No of bedrooms" />
            </div>
            <div class="col-sm-6">
                <input type="text" v-model="bathrooms" class="form-control" placeholder="No of bathrooms" />
            </div>
        </div>
        <div class="row form-item">
            <div class="col-sm-6">
                <input type="text" v-model="storeys" class="form-control" placeholder="Storeys" />
            </div>
            <div class="col-sm-6">
                <input type="text" v-model="garages" class="form-control" placeholder="Garages" />
            </div>
        </div>
        
        <div class="row form-item">
            <div class="col-sm-6">
                <input type="text" v-model="min_price" class="form-control" placeholder="Price from" />
            </div>
            <div class="col-sm-6">
                <input type="text" v-model="max_price" class="form-control" placeholder="Price to" />
            </div>
        </div>
        <div class="form-item">
            <input type="submit" v-on:click="searchProperty" class="btn btn-primary" value="Search" />
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                name: '',
                bedrooms: '',
                bathrooms: '',
                storeys: '',
                garages: '',
                min_price: '',
                max_price: '',
            }
        },        
        methods: {
            searchProperty() {                
                this.$emit('submit-search', this.name, this.bedrooms, this.bathrooms, this.storeys, this.garages, this.min_price, this.max_price);
            }
        }
    }
</script>
