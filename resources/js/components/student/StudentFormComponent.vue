<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <el-page-header @back="goBack" :content="`Category - ${scope}`">
                </el-page-header>
            </div>

            <div>
                <el-form :model="model" :rules="rules" ref="studentForm">
                    <el-row :guuter="10">
                        
                        <el-form-item label="Name" required prop="name">
                            <el-input v-model="model.name"></el-input>
                        </el-form-item>
                        
                        <el-form-item label="Email" required prop="email">
                            <el-input v-model="model.email"></el-input>
                        </el-form-item>
                        
                        <el-form-item label="Class" required prop="class">
                            <el-input v-model="model.class"></el-input>
                        </el-form-item>

                        <el-form-item label="Section" required prop="section">
                            <el-input v-model="model.section"></el-input>
                        </el-form-item>



                    </el-row>

                    <el-row :guuter="10">
                        <el-form-item>
                            <el-button type="success" @click="saveForm('studentForm')">Save Student</el-button>
                            <el-button type="warning" @click="getList()">Students List</el-button>

                        </el-form-item>

                       
                    </el-row>

                </el-form>
            </div>

        </el-card>


    </div>
</template>

<script>
    export default {
        name: 'student-form-component',

        props:{
            scope: String,
        },  

        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                model: {
                    name: null,
                    class: null,
                    sectom: null,
                    email: null,
                },
                rules: {

                }

            }
        },
        methods: {

            goBack() {
                window.location.href = '/students'
            },
            getList() {
                window.location.href = '/students'
            },
            saveForm(formName) {
                this.$refs[formName].validate((valid) => {
                    if(valid)
                    {
                        this.$store.dispatch('saveStudent', this.model);
                    }
                });
            }
        }
    }

</script>
