<template>

    <div class="date-picker row">
        <div class="col-md-6 calendar-nav-left">
            <button class="btn btn-default" @click="notify(0)">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span>Previous</span>
            </button>
        </div>
        <div class="col-md-6 calendar-nav-right">
            <button class="btn btn-default" @click="notify(1)">
                <span>Next</span>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
        </div>
        <table class="date-picker-table date-picker-table-visible col-md-6">


            <caption>
                {{calendar1}}
            </caption>
            <thead>
            <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="w in 6">
                    <td v-for="d in 7" id="0_{{w+'_'+d}}"></td>
                </tr>


            </tbody>
        </table>

        <table class="date-picker-table date-picker-table-visible col-md-6">
            <caption>
                {{calendar2}}
            </caption>
            <thead>
            <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="w in 6">
                <td v-for="d in 7" id="1_{{w+'_'+d}}"></td>
            </tr>

            </tbody>
        </table>
        <div class="row">
            <button type="button" id="btn_continue" class="btn btn-default center-block">View available rooms</button>
        </div>
    </div>
</template>
<style>
    .date-picker{
        border: 1px solid #dedede;
    }
    table{
        line-height: 20px;
    }
    tbody tr {
        display: table-row;
        vertical-align: middle;
    }
    tr {
        border-top: 1px solid #ece8e3;
        border-bottom: 1px solid #ece8e3;
    }
    .date-picker-table {
        border-collapse: separate;
        table-layout: fixed;
        empty-cells: show;
        font-size: 16px;
        font-weight: bold;
    }
    .date-picker-table td {
        padding: 5px 0;
        border: 1px solid #fff;
        background: #fff;
        color: #d0c7bd;
        vertical-align: top;
        text-align: center;
        font-size: 12px;
        cursor: default;
        text-decoration: line-through;
        font-weight: normal;


    }
    .date-picker-table td{
        font-size: 22px;
    }
    td[data-e1]{
        border: 1px solid #e6f2f7;
        background: #ecb2cc;
        box-shadow: inset 0 0 0 1px #ec000f;
        color: #4a433b;
    }

     td[data-av] {
        background: white;
        box-shadow: inset 0 0 0 1px #ece8e3;
        color: #4a433b;
        text-align: center;
        vertical-align: middle;
         text-decoration: none;
         cursor: pointer;
    }
    .date-picker-table td[data-av] .date-picker-av {
        display: block;
        color: #007eb2;
        text-align: right;
        font-size: 12px;
    }
    td[data-s]{
        border: 1px solid #e6f2f7;
        background: #e6f2f7;
        box-shadow: inset 0 0 0 1px #bfdfec;
        color: #4a433b;
    }
    caption{
        text-align: center;
        font-size: 1.3em;
        color: black;
        padding: 1em;
    }
    .calendar-nav-right{
        text-align: right;
    }
    @media screen and (min-width: 980px){
        .date-picker-table td {
            padding: 25px 5px;
            height: 70px;
        }
        .date-picker{
            padding: 40px;
        }
        .calendar-nav-mobile{
            display: none;
        }
    }
</style>
<script>

    export default{
        data(){
            return{
                calendar1: moment().format('MMMM YYYY'),
                calendar2: moment().add(1,'M').format('MMMM YYYY')
            }
        },
        props:["calendars","rooms","date","nights"],
        watch:{
            'calendars':function () {
                //debugger;
                this.buildCalendar(this.calendars[0],0);
                this.buildCalendar(this.calendars[1],1);
                this.calendar1 = this.date.format('MMMM YYYY');
                this.calendar2 = moment(this.date).add(1,'M').format('MMMM YYYY');
                this.clearSelection()
            },
            'nights':function () {
                this.clearSelection()
            }

        },
        created: function(){

        },

        methods:{
            clearSelection(){
                $("td[id^="+0+"_]").each(function () {
                    $(this).removeAttr('data-s')
                });
                $("td[id^="+1+"_]").each(function () {
                    $(this).removeAttr('data-s')
                });

                $('#btn_continue').addClass('disabled')
            },
            toggleError(day,nr){
                day--; //coretie offset
                i = this.calendars[nr].firstDayOfWeek + day;
                var week =  Math.floor(i / 7);
                //TODO: both!
                var target = $('#'+nr+'_'+week+'_'+ i % 7);
                target.attr('data-e1',1);
                setTimeout(function() {
                    target.removeAttr('data-e1');
                }, 500);

            },
            toggleSelected(day,nr){
                day--; //coretie offset
                i = this.calendars[nr].firstDayOfWeek + day;
                var week =  Math.floor(i / 7);
                //TODO: both!
                var target = $('#'+nr+'_'+week+'_'+ i % 7);
                target.attr('data-s',1);
                $('#btn_continue').removeClass('disabled')

            },
            makeSelection(element,nights){
              var haveRooms = true;
                //debugger;
                nr = element.id[0];
                var checkin = $(element).html();
                for(var i = checkin;i < (parseInt(checkin) + nights);i++){
                    //debugger;
                    if (this.calendars[nr].total_avails[i] < this.rooms){
                        haveRooms = false;
                        this.toggleError(i,nr);
                        console.log('conflicting:'+i)
                    }
                }
                if (haveRooms){
                    for(i = checkin;i < (parseInt(checkin) + nights);i++){
                        this.toggleSelected(i,nr);
                    }
                }
                return haveRooms;
            },

            buildCalendar(calendar,nr){
                var day = 1;
                calendar.firstDayOfWeek--; //adjust for 0
                calendar.total_avails.unshift(0); //add day, adjust for 0
                $("td[id^="+nr+"_]").each(function () { //cleaning up the mess
                    $(this).html('').removeAttr('data-av')
                });

                for(var i = calendar.firstDayOfWeek;i<calendar.daysInMonth+calendar.firstDayOfWeek;i++){
                    that = this;
                    var week =  Math.floor(i / 7);
                    var target = $('#'+nr+'_'+week+'_'+i % 7);
                    target.html(day);
                    if(calendar.total_avails[day] >= this.rooms){
                        $('#'+nr+'_'+week+'_'+i % 7).attr('data-av',calendar.total_avails[day]).on('click',function (e) {
                            e.stopPropagation();
                            that.clearSelection();
                            //TODO:
                            console.log(that.makeSelection(e.target,that.nights));
                        })
                    } else {
                        $('#'+nr+'_'+week+'_'+i % 7).removeAttr('data-av');
                    }
                    //debugger;
                    day++;
                }
            },
            notify: function (direction) {
                this.$dispatch('update-calendar', direction);

            }
        }
    }
</script>
