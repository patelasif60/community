<template>
   <router-view></router-view>
</template>
<script>
//import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    //HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
footer {
    color: #f4f6f9;
    /*bottom: 0;*/
    /*position: fixed;*/
}

body {
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    color: #000;
    font-weight: 500;
    background-color: #f4f6f9;
}

.container-fluid {
    padding-left: var(--bs-gutter-x, 1rem);
    padding-right: var(--bs-gutter-x, 1rem);
}

.map-wrap {
    min-height: 450px;
}

.card-main {
    border-radius: 0;
    min-height: 83vh;
    box-shadow: 0 -1px 5px 0 rgb(153 161 173 / 44%);
}

.error-block {
    height: 100vh;
}

.login-from {
    height: 100vh;
}

.start-50 {
    left: 46.5% !important;
}

.required:after {
    color: #dc3545;
    content: "*";
    /*position: absolute;*/
    margin-left: 3px;
}

/*external*/
.tracking-detail {
    padding: 3rem 0
}

#tracking {
    margin-bottom: 1rem
}

[class*=tracking-status-] p {
    margin: 0;
    font-size: 1.1rem;
    color: #fff;
    text-transform: uppercase;
    text-align: center
}

[class*=tracking-status-] {
    padding: 1.6rem 0
}

.tracking-status-intransit {
    background-color: #65aee0
}

.tracking-status-outfordelivery {
    background-color: #f5a551
}

.tracking-status-deliveryoffice {
    background-color: #f7dc6f
}

.tracking-status-delivered {
    background-color: #4cbb87
}

.tracking-status-attemptfail {
    background-color: #b789c7
}

.tracking-status-error, .tracking-status-exception {
    background-color: #d26759
}

.tracking-status-expired {
    background-color: #616e7d
}

.tracking-status-pending {
    background-color: #ccc
}

.tracking-status-inforeceived {
    background-color: #214977
}

.tracking-list {
    border: 1px solid #e5e5e5
}

.tracking-item {
    border-left: 1px solid #e5e5e5;
    position: relative;
    padding: 2rem 1.5rem .5rem 2.5rem;
    font-size: .9rem;
    margin-left: 3rem;
    min-height: 5rem
}

.tracking-item:last-child {
    padding-bottom: 4rem
}

.tracking-item .tracking-date {
    margin-bottom: .5rem
}

.tracking-item .tracking-date span {
    color: #888;
    font-size: 85%;
    padding-left: .4rem
}

.tracking-item .tracking-content {
    padding: .5rem .8rem;
    background-color: #f4f4f4;
    border-radius: .5rem
}

.tracking-item .tracking-content span {
    display: block;
    color: #888;
    font-size: 85%
}

.tracking-item .tracking-icon {
    line-height: 2.6rem;
    position: absolute;
    left: -1.3rem;
    width: 2.6rem;
    height: 2.6rem;
    text-align: center;
    border-radius: 50%;
    font-size: 1.1rem;
    background-color: #fff;
    color: #fff
}

.tracking-item .tracking-icon.status-outfordelivery {
    background-color: #f5a551
}

.tracking-item .tracking-icon.status-deliveryoffice {
    background-color: #f7dc6f
}

.tracking-item .tracking-icon.status-attemptfail {
    background-color: #b789c7
}

.tracking-item .tracking-icon.status-exception {
    background-color: #d26759
}

.tracking-item .tracking-icon.status-inforeceived {
    background-color: #214977
}

.tracking-item .tracking-icon.status-intransit {
    color: #e5e5e5;
    border: 1px solid #e5e5e5;
    font-size: .6rem
}

@media (min-width: 992px) {
    .tracking-item {
        margin-left: 10rem
    }

    .tracking-item .tracking-date {
        position: absolute;
        left: -10rem;
        width: 7.5rem;
        text-align: right
    }

    .tracking-item .tracking-date span {
        display: block
    }

    .tracking-item .tracking-content {
        padding: 0;
        background-color: transparent
    }
}

:root {
    --container-width: 767px;
    --header-height: 65px;
    --footer-height: 50px;
    --primary-color: #05a8ba;
    --bs-primary-rgb: 5, 168, 186;
}

a:hover {
    color: #000;
}

.btn-success {
    /*background-color: #157347;*/
    /*border-color: #24d783;*/
}

.form-check-input:checked {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-primary,
.btn-check:focus + .btn-primary, .btn-primary:focus,
.btn-primary:hover {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    color: #fff;
    box-shadow: none !important;
}

.btn-check:active + .btn-outline-primary,
.btn-check:checked + .btn-outline-primary,
.btn-outline-primary.active,
.btn-outline-primary.dropdown-toggle.show,
.btn-outline-primary:active {
    color: #fff;
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-check:active + .btn-outline-primary:focus,
.btn-check:checked + .btn-outline-primary:focus,
.btn-outline-primary.active:focus,
.btn-outline-primary.dropdown-toggle.show:focus,
.btn-outline-primary:active:focus {
    box-shadow: 0 0 0 0.25rem rgb(255 217 102 / 19%);
}

.btn-outline-primary {
    color: #fff;
    border-color: var(--primary-color);
}

.form-control:focus {
    box-shadow: 0 0 0 0.25rem rgb(255 217 102 / 19%);
    border-color: var(--primary-color);
}

.bg-primary {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.dropdown-item:focus, .dropdown-item:hover {
    background-color: var(--primary-color);
    color: #fff;
}

.login-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 300px;
    margin: 0 auto;
}

.login-wrap .brand-name {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 30px;
    text-transform: uppercase;
}

.login-form {
    width: 100%;
}

.login-form .input-form-item {
    margin-bottom: 16px;
}

</style>
