<template>
<div class="row">
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{amountOrder}}</h3>
                <p>New Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{amountUser}}</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{amountProduct}}</h3>
                <p>Amount of Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
</template>

<script>
	export default {
		data() {
			return {
				amountOrder : '',
				amountUser : '',
				amountProduct :'',
			}
		},

		created() {
			this.getAmountUser();
			this.getAmountProduct();
			this.getAmountOrder();
		},

		methods : {
			getAmountUser(){
				axios.get('admin/getAmountUser')
				.then (response => {
					this.amountUser = response.data.countUser;
				})
				.catch (error=> {
					console.log(error);
				})
			},
			getAmountProduct(){
				axios.get('admin/getAmountProduct')
				.then (response => {
					this.amountProduct = response.data.countProduct;
				})
				.catch(error=> {
					console.log(error);
				})
			},
			getAmountOrder(){
				axios.get('admin/getAmountOrder')
				.then (response => {
					this.amountOrder = response.data.countOrder;
				})
				.catch (error=> {
					console.log(error);
				})
			},
		}
	}
</script>