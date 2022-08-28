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
                            <el-input v-model="model.name" aria-placeholder="Studnet Name"></el-input>
                        </el-form-item>
                        
                        <el-form-item label="Email" required prop="email">
                            <el-input v-model="model.email" aria-placeholder="Studnet Email"></el-input>
                        </el-form-item>
                        
                        <el-form-item label="Class" required prop="class">
                            <el-input v-model="model.class" aria-placeholder="Studnet Class"></el-input>
                        </el-form-item>

                        <el-form-item label="Section" required prop="section">
                            <el-input v-model="model.section" aria-placeholder="Studnet Section"></el-input>
                        </el-form-item>



                    </el-row>

                    <el-row :guuter="10">
                        <el-form-item>
                            <el-button type="sucess" @click="saveForm('studentForm')">Save Student</el-button>
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
            saveForm(formName) {

            }
        }
    }

</script>
