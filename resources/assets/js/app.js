
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('search-component', require('./components/SearchComponent.vue'));
Vue.component('row-component', require('./components/RowComponent.vue'));

var initData = {
	propertyList: [],
	message: 'Sorry, but no properties were found',
	loading: true
}

var app = new Vue({
    el: '#app',
    data() {
    	return initData
    },
    created() {
  		this.read('/api/properties');
	},
    methods: {    	
		read(url) {			
			window.axios.get(url)
			.then(({ data }) => {
				this.loading = false;
				this.propertyList = data;
		    }).catch(err => {
		    	this.loading = false;
		    	this.message = "Server error!!! Something went wrong while loading data";		    	
		    	console.error(err);
		    });
		},
		search(name, bedrooms, bathrooms, storeys, garages, min_price, max_price) {
			this.loading = true;
			const url = `/api/properties?name=${name}&bedrooms=${bedrooms}&bathrooms=${bathrooms}&storeys=${storeys}&garages=${garages}&min_price=${min_price}&max_price=${max_price}`;
			this.read(url);
		}
	},
	template: `
		<div class="wrapper">
			<search-component @submit-search="search" v-bind:class="{ loading: loading }"></search-component>
			<div v-if="loading" class='loader'>
			</div>
			<div v-else-if="propertyList.length">
				<table class='table table-stripped'>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Bedrooms</th>
						<th>Bathrooms</th>
						<th>Storeys</th>
						<th>Garages</th>
					</tr>
					<row-component
				      v-for="property in propertyList"
				      v-bind="property"
				      :key="property.id"			      
				    ></row-component>				
				</table>
			</div>
			<div v-else class="alert alert-danger">
				{{ message }}				
			</div>
		</div>
	`
});

