<template>
    <div class="page-wrap">
        <div class="container">
            <div class="login-wrap">
                <div class="brand-name">
                    Community
                </div>
                <form  @submit.prevent="submitForm" class="login-form">
                    <p>Please login to your account</p>
                    <div class="input-form-item">
                        <input class="form-control" v-model.trim="email" name="email" id="email" placeholder="Email Address"  type="email"/>
                    </div>
                    <div class="input-form-item">
                        <input class="form-control"  v-model.trim="password" name="password" id="password" type="password" placeholder="Password" />
                    </div>
                    <div class="row">
                        <div class="col-12 errors" v-if="!formIsValid">Please Enter valid Email & Password</div>
                    </div>
                    <button class="w-100 btn btn-primary mb-3"  type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";

export default{

    data(){
        return{
            email:'',
            password:'',
            formIsValid:true,
            mode:'login'
        }
    },
    methods:{
        submitForm() {
            this.formIsValid = true;
            if(this.email === '' || !this.email.includes('@') || this.password === '')
            {
                this.formIsValid = false;
                return;
            }
            axios
                .post(process.env.VUE_APP_BASE_URL+"/auth/login",{
                    email: this.email,
                    password:   this.password
                })
                .then((res)=>
                {
                    localStorage.setItem('id_token', res.data.access_token);
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
