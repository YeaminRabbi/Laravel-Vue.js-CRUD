<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <div>
                    <el-button type="success" class="float-right" @click="create()">Add Student</el-button>
                </div>
            </div>

            <div>
                
                
                <el-table
                    :data="tableData"
                    :stripe="true"
                    :border="true"
                    style="width: 100%">
                    <el-table-column
                        v-for="(column) in tableColumns"
                        :key="column.label"
                        :label="column.label"
                        :prop="column.prop"
                        :column-key="column.prop"
                        :min-width="column.minWidth"
                        :sortable="column.sortable"
                        :align="column.align"
                        :header-align="column.align"
                        :fixed="column.fixed || null"
                        :formatter="column.formatter || null"

                    ></el-table-column>


                   
                    <el-table-column align="right">
                        <template  slot="header">
                            <el-input v-model="searchQuery" size="mini" placeholder="Type to search" />
                        </template>
                        <template slot-scope="scope">
                            <el-button size="mini" type="primary" @click="editData(scope.$index, scope.row)">Edit</el-button>
                            <el-button size="mini" type="danger" @click="deleteData(scope.$index, scope.row)">Delete
                            </el-button>
                        </template>
                    </el-table-column>
                </el-table>
            </div>

        </el-card>


    </div>
</template>

<script>
import { mapGetters } from 'vuex';

    export default {
        name: 'student-table-component',

        mounted() {
            const loading = this.$loading({
                lock:true,
                text:'Loading Student Data',
                spinner: 'el-icon-loading',
                background: "rgba(255,255,255,0.85)",
            });

            this.$store.dispatch('getStudents');
            loading.close();
        },
        computed: {
            ...mapGetters({
                tableData : "tableData"
            })
        },
        data() {
            return {
                searchQuery: null,
                tableColumns:[
                    {
                        prop:"id",
                        label:"ID",
                        minWidth:40,
                        sortable: true,
                        hidden:false,
                        align: 'center',
                        fixed: true
                    },
                  
                    {
                        prop:"name",
                        label:"Name",
                        minWidth:50,
                        sortable: false,
                        hidden:false,
                        align: 'center',
                        fixed: true
                    },
                      {
                        prop:"email",
                        label:"Email",
                        minWidth:60,
                        sortable: false,
                        hidden:false,
                        align: 'center',
                        fixed: true
                    },
                    {
                        prop:"class",
                        label:"Class",
                        minWidth:40,
                        sortable: false,
                        hidden:false,
                        align: 'center',
                        fixed: true
                    },
                    {
                        prop:"section",
                        label:"Section",
                        minWidth:40,
                        sortable: false,
                        hidden:false,
                        align: 'center',
                        fixed: true
                    }
                ]
                

            }
        },
        methods: {
            create(){
                window.location.href = '/add-student';
            },
            handleDelete(id)
            {
                console.log(id);
            },
            editData(index, row){
                console.log(row);
                window.location.href = '/edit-student/'+row.id+'/edit';
            },
            deleteData(index, row)
            {
                console.log(row.id);
                window.location.href = '/delete-student/'+row.id+'/delete';
            }

        }
    }

</script>
