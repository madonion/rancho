<template>
    <!--<a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>-->
    <progress-indicator></progress-indicator>
    <div id="step_1">
        <div class="row calendar-selector">
            <div class="room-select col-md-3">
                <div class="spinner-container">
                    <label for="rooms" class="spinner__label">Rooms</label>
                    <span class="widget-spinner ">
                    <button tabindex="-1" class="widget-spinner-minus" @click="room_sub">–</button><input type="text" min="1" max="5" maxlength="1" name="rooms" v-model="rooms"><button tabindex="-1" class="widget-spinner-plus" @click="room_add">+</button>
                </span>
                </div>
            </div>
            <div class="room-options-spinners col-md-6 col-xs-12 row">
                <div class="spinner__labels">
                    <div class="spinner-container col-md-4">
                        <label class="spinner__label">Adults</label>
                    </div>

                    <div class="spinner-container  col-md-4">
                        <label class="spinner__label">Children <small>4 to 12 yrs</small></label>
                    </div>

                    <div class="spinner-container  col-md-4">
                        <label class="spinner__label">Babies <small>0 to 3 yrs</small></label>
                    </div>

                </div>
                <div class="spinner__multiple">
                    <room-options v-for="room in rooms" :index="$index"></room-options>
                </div>
            </div>
            <div class="spinner-container pull-right">
                <label for="nights" class="spinner__label">Nights</label>
                <span class="widget-spinner ">
                <button tabindex="-1" class="widget-spinner-minus" @click="nights_sub">–</button><input type="text" maxlength="2" v-model="nights"><button tabindex="-1" class="widget-spinner-plus" @click="nights_add">+</button>
            </span>
            </div>
        </div>
        <date-selector :date="date" :nights="nights" :calendars="calendars" :rooms="rooms"></date-selector>
    </div>
    <div id="step_2" style="display:none">
        Rooms available
        <div class="row">
            <section class="col-md-8 room-selection">
                <article class="room">
                    <div class="room-image col-md-4">
                        <img src="http://placehold.it/300x200" class="img-responsive">
                    </div>
                    <div class="room-image col-md-6">
                        <h3 class="room-name">{{$room['name']}}</h3>
                        <p class="room-price">price: {{$room['price']}}, capacity: </p>
                        <a href="{{ $room['name'] }}">Book this room</a>
                    </div>
                </article>

            </section>

            <aside class="info-sidebar col-md-4">
                <strong>Your booking details</strong><br>
                Check in date: dd-mm-yyyy, Check out date dd-mm-yyyy<br>
                <strong>x rooms, y adults</strong>
            </aside>
            <div class="alert-info col-md-4">
                &nbsp;<i class="fa fa-info-circle" aria-hidden="true"></i> Select x more rooms to continue your booking.
            </div>
        </div>
    </div>
    <div id="step_3" style="display:none">
        <h2>Your details:</h2>
        <div class="form-group">
            <label for="lname">Last name:</label>
            <input id="lname" class="form-control" type="text" v-model="lname">
        </div>
        <div class="form-group">
            <label for="fname">First name:</label>
            <input id="fname" class="form-control" type="text" v-model="fname">
        </div>
        <div class="form-group">
            <label for="pass">Passport Number or NIE:</label>
            <input id="pass" class="form-control" type="text" v-model="pass">
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input id="email" class="form-control" type="email" v-model="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone number:</label>
            <input id="phone" class="form-control" type="number" v-model="phone">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile number:</label>
            <input id="mobile" class="form-control" type="number" v-model="mobile">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input id="address" class="form-control" type="text" v-model="address">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" rows="5" class="form-control" type="text" v-model="message"></textarea>
        </div>
        <input type="submit" value="Payment">

    </div>
    <div id="step_4" style="display:none">
        confirmation, optional payment
    </div>

</template>
<style>
    .inner:before, .inner:after {
        content: " ";
        display: table;
        clear: both;
    }
    .calendar-selector {
        font-size: 14px;
        background: #efedeb;
        overflow: auto;
        padding: 15px;
    }
    .room-options-spinners .spinner-container {
        float: left;
    }
    .room-options-spinners {
        display: inline-block;
        vertical-align: top;
    }

    .widget-spinner input {
        padding: 11px 10px 11px;
        width: 50px;
        border: 1px solid #d0c7bd;
        background: #fff;
        vertical-align: middle;
        text-align: center;
        font-size: 16px;
        line-height: 30px;
    }
    .widget-spinner button {
        -webkit-transition-property: background-color;
        -moz-transition-property: background-color;
        transition-property: background-color;
        -webkit-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        transition-timing-function: ease-in-out;
        -webkit-transition-delay: 0;
        -moz-transition-delay: 0;
        transition-delay: 0;
        -webkit-transition-duration: 0.15s;
        -moz-transition-duration: 0.15s;
        transition-duration: 0.15s;
        position: relative;
        margin: 0;
        padding: 0;
        width: 50px;
        height: 50px;
        border: 1px solid #d0c7bd;
        background: #fff;
        color: #007eb2;
        vertical-align: middle;
        text-align: center;
        font-size: 21px;
    }
    *{
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }
    input[type="text"], input[type="email"], input[type="password"], input[type="date"], input[type="tel"], input[type="number"] {
        font-size: 16px;
        font-family: "pt-sans-narrow", sans-serif;
        border: 1px solid #dad3ca;
        padding: 9px;
        max-width: 280px;
        height: 50px;
        -webkit-appearance: none;
        border-radius: 0;
        position: relative;
        cursor: text;
    }
    .widget-spinner {
        margin-right: 10px;
    }
    .spinner__label {
        display: block;
        margin-right: 10px;
        padding-left: 2px;

    }
    .widget-spinner .widget-spinner-minus {
        /* border-radius: 5px 0 0 5px; */
        margin-right: -1px;
    }
    .widget-spinner .widget-spinner-plus {
        /* border-radius: 0 5px 5px 0; */
        margin-left: -1px;
    }
    div[id^="step_"]{min-height: 800px;}

    @media screen and (min-width: 740px) {
        .room-options__room-number {
            display: none;
        }
        .max-room-select-rooms, .room-select-rooms {
            display: inline-block;
            vertical-align: top;
        }
        .spinner__label.spinner__label--show-on-mobile {
            display: none;
        }
        .spinner__multiple .spinner-container {
            margin-bottom: 10px;
        }

    }
    @media screen and (min-width: 980px){

    }
</style>
<script>
    import RoomOptions from './RoomOptions.vue';
    import DateSelector from './DateSelector.vue';
    import ProgressIndicator from './ProgressIndicator.vue';
    //window.VueStrap = require('vue-strap/dist/vue-strap.min.js');
    export default{
        data(){
            return {
                calendars:{},
                rooms: 1,
                nights: 1,
                options:[{"adults":2,"children":0,"babies":0}],
                date: moment()
            }
        },
        created: function () {
            this.fetchData()
        },
        methods:{
            room_add: function(){
                if(this.rooms < 10){
                    this.options.push({"adults":2,"children":0,"babies":0});
                    this.rooms++;
                    this.fetchData()
                }
            },
            room_sub: function(){
                if(this.rooms > 1){
                    this.options.pop();
                    this.rooms--;
                    this.fetchData()
                }
            },
            nights_add: function(){
                if(this.nights < 14){
                    this.nights++;
                }
            },
            nights_sub: function(){
                if(this.nights > 1){
                    this.nights--;
                }
            },
            
             fetchData: function () {

                 var self = this;
                //request = {"rooms":this.rooms,"nights":this.nights,"options":this.options};
                this.$http.get('/api/v1/bookings?date='+encodeURIComponent(this.date)).then(function (response) {
                    self.calendars = response.json();
                    console.log(response)

                },function (response) {
                    console.log('Error fetching data!')
                });
            }
        },
        events: {
            'update-options': function (msg) {

                this.options[msg[0]] = msg[1];
                //this. fetchData()
            },

            'update-calendar': function (msg) {
                if(msg == 0){
                    if(moment(this.date).isSameOrBefore(moment(),'month')){
                        console.log('past limit')
                    }else{
                        //debugger;
                        this.date.subtract(1,"M");
                        this.fetchData()
                    }
                }
                if(msg == 1){

                    if(moment(this.date).isSameOrAfter(moment().add(2,'Y'),'month')){
                        console.log('future limit')
                    }else {
                        //debugger;
                        this.date.add(1,"M");
                        this.fetchData()
                    }
                };

            }
        },
        components: {RoomOptions,DateSelector,ProgressIndicator}
    }
</script>
