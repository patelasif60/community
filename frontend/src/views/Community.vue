<template>
    <div class="container-fluid">
        <div class="content-header">
            <div class="row mb-2">
                <h4 class="col-11 m-0">Add Question</h4>
            </div>
        </div>
        <div class="card card-main mb-4">
            <div class="card-body">
                <div class="row justify-content-left">
                    <div class="col-lg-12">
                        <div class="border-0 rounded-lg">
                            <form autocomplete="off"  @submit.prevent="submitData" >
                                <div class="row">
                                    <div class="col-12 errors"></div>
                                </div>
                                <div class="mb-3 col-lg-3">
                                    <label class="form-label required float-start" for="inputName">Title</label>
                                    <input autocomplete="off"  v-model.trim="title" class="form-control" name="title" id="inputName" type="text"/>
                                </div>
                                <div class="mb-3 col-lg-3">
                                    <label class="form-label required float-start">Content</label>
                                    <textarea v-model.trim="content" autocomplete="off"  rows="5" class="form-control" name="content"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-12 errors" v-if="!formIsValid">Please Enter valid Email & Password</div>
                                </div>
                                <div class="mb-3 col-lg-3">
                                    <input class="btn btn-primary float-start" type="submit" value="Create" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
const token = `Bearer ${localStorage.getItem('id_token')}`
export default{

    data(){
        return{
            title:'',
            content:'',
            formIsValid:true,
            mode:'submit'
        }
    },
    methods:{
        submitData() {
            this.formIsValid = true;
            if(this.title === '' || this.content === '')
            {
                this.formIsValid = false;
                return;
            }
            axios
                .post(process.env.VUE_APP_BASE_URL+"/insertdata",{title: this.title,content:this.content},{headers:{ Authorization: token}})
                .then(()=>
                {
                   this.$router.push('/community/list');
                })
                .catch(() => {
                    this.formIsValid = false;
                    return;
                });
        },
    }
}
</script>
