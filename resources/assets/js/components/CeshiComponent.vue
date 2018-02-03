<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ceshi Component</div>

                    <div class="panel-body">
                        <el-button @click="visible = true">按钮</el-button>
                        <el-dialog :visible.sync="visible" title="Hello world">
                        <p>欢迎使用 Element</p>
                        </el-dialog>




                        <hr>


                        <el-time-picker
                            is-range
                            v-model="value4"
                            range-separator="至"
                            start-placeholder="开始时间"
                            end-placeholder="结束时间"
                            placeholder="选择时间范围">
                        </el-time-picker>
                        <el-time-picker
                            is-range
                            arrow-control
                            v-model="value5"
                            range-separator="至"
                            start-placeholder="开始时间"
                            end-placeholder="结束时间"
                            placeholder="选择时间范围">
                        </el-time-picker>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                visible:false,
                value4: [new Date(2016, 9, 10, 8, 40), new Date(2016, 9, 10, 9, 40)],
                value5: [new Date(2016, 9, 10, 8, 40), new Date(2016, 9, 10, 9, 40)]
            }
        }
    }
</script>
