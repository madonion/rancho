<template>
    <div class="room-options row">
        <h3 class="room-options__room-number">Room 1</h3>

        <div class="spinner-container col-md-4">
            <label class="spinner__label spinner__label--show-on-mobile" for="adults_0">Adults</label>
            <span class="widget-spinner "><button tabindex="-1" class="widget-spinner-minus" @click="adults_sub">–</button><input type="text" min="1" max="2" maxlength="1"  v-model="adults"><button tabindex="-1" class="widget-spinner-plus" @click="adults_add">+</button></span>
        </div>

        <div class="spinner-container col-md-4">
            <label class="spinner__label spinner__label--show-on-mobile" for="children_0">Children <small>4 to 12 yrs</small></label>
            <span class="widget-spinner "><button tabindex="-1" class="widget-spinner-minus" @click="children_sub">–</button><input type="text" min="0" max="2" maxlength="1" v-model="children"><button tabindex="-1" class="widget-spinner-plus" @click="children_add">+</button></span>
        </div>

        <div class="spinner-container col-md-4">
            <label class="spinner__label spinner__label--show-on-mobile" for="babies_0">Babies <small>0 to 3 yrs</small></label>
            <span class="widget-spinner "><button tabindex="-1" class="widget-spinner-minus" @click="babies_sub">–</button><input type="text"  min="0" max="9" maxlength="1"  v-model="babies"><button tabindex="-1" class="widget-spinner-plus" @click="babies_add">+</button></span>
        </div>

    </div>
</template>
<style>

</style>
<script>
    export default{
        data(){
            return {
                'adults':2,
                'children':0,
                'babies':0,
            }
        },
        methods:{
            adults_add: function () {
                if(this.adults<4){
                    this.adults++;
                    this.notify()
                }
            },
            adults_sub: function () {
                if(this.adults>1){
                    this.adults--;
                    this.notify()
                }
            },
            children_add: function () {
                if(this.children<10){
                    this.children++;
                    this.notify()
                }
            },
            children_sub: function () {
                if(this.children>0){
                    this.children--;
                    this.notify()
                }
            },
            babies_add: function () {
                if(this.babies<10){
                    this.babies++;
                    this.notify()
                }
            },
            babies_sub: function () {
                if(this.babies>0){
                    this.babies--;
                    this.notify()
                }
            },

            notify: function () {
                this.$dispatch('update-options', [this.index,{"adults":this.adults,"children":this.children,"babies":this.babies}]);

            }

        },
        props:['index']
    }
</script>
