<template>
    <div class="container">
        <div class="row">
            <h5 class="text-align left">Dashboard</h5>
        </div>
        <div class="row">
            <div class="col-3 ">
                <div class="jumbotron" style="height: 25px ;background-color: lightskyblue">
                    <div class="row" style="height: 100%">
                        <div class="col-3" style="background-color: red"><i class="fas fa-cog"></i></div>
                        <div class="col-9 d-flex">Orders <span class="ml-3">{{orders}}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="jumbotron" style="height: 25px  ;background-color: lightskyblue">
                    <div class="row" style="height: 100%">
                        <div class="col-3" style="background-color: green"><i class="fas fa-cog"></i></div>
                        <div class="col-9 d-flex">Users <span class="ml-3">{{users}}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="jumbotron" style="height: 25px  ;background-color: lightskyblue">
                    <div class="row" style="height: 100%">
                        <div class="col-3" style="background-color: blue"><i class="fas fa-cog"></i></div>
                        <div class="col-9 d-flex">Delivered Items <span class="ml-3">{{delivered_items}}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="jumbotron" style="height: 25px  ;background-color: lightskyblue">
                    <div class="row" style="height: 100%">
                        <div class="col-3" style="background-color: yellow"><i class="fas fa-cog"></i></div>
                        <div class="col-9 d-flex">Complain <span class="ml-3">{{complain}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="data">
                <div class="d-flex justify-content-between">
                    <h6>Monthly Recap Report</h6>
                    <div class="icon"><i class="fa fa-home"></i></div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="box">
                            kjadkkcjasc
                        </div>
                    </div>
                    <div class="col-3">
                        kdklsjc1
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Dashboard.vue",
        data() {
            return {
                users: 1024,
                orders: 50,
                delivered_items: 40,
                complain: 10
            }
        }
    }
</script>

<style scoped>
    .data {
        box-sizing: border-box;
        width: 100%;
        padding: 12px;
        text-align: left;
        height: 300px;
        border: 1px solid;
    }

    .box {
        margin-top: 2px;
        margin-left: 4px;
        border: 1px solid;
    }

    .graph {
        width: 60%;
    }

    .data1 {
        width: 40%;
    }

    .icon {
        text-align: right;
    }
</style>