<template>
    <div class="row">
         <div class="col-12">
           <router-link  class="btn btn-sm btn-primary float-end" to="/community">Create</router-link>
        </div>
        <div class="col-12">
            <div class="table-responsive-sm">
                <h2>Questions</h2>
                <table class="table table-bordered table-striped table-condensed table-sm" id="datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in questions" :key="item.id">
                            <td>{{item.id}}</td>
                            <td>{{item.title}}</td>
                            <td>{{item.content}}</td>
                            <td>
                                <a href="#" @click.prevent="deleteRecord(item.id)" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import 'jquery/dist/jquery.min.js';
import 'bootstrap/dist/css/bootstrap.min.css';
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"
import axios from 'axios';
import $ from 'jquery';
const token = `Bearer ${localStorage.getItem('id_token')}`
export default {

    mounted(){
       axios
            .get(process.env.VUE_APP_BASE_URL+"/getdata?type=all",{headers:{ Authorization: token}})
            .then((response)=>
            {
               this.questions = response.data.QuestionData;
                setTimeout(() => {
                    $('#datatable').DataTable({
                        lengthMenu: [
                            [5,10, 25, 50, -1],
                            [5,10, 25, 50, "All"],
                        ],
                        pageLength: 5,
                    });
                });
            }).catch(() => {

           //this.$router.push('/');
       })
    },
    data: function() {
        return {
            questions:[],
        }
    },
    methods:{
        deleteRecord(id) {
            axios
                .delete(process.env.VUE_APP_BASE_URL+"/deletedata/"+id,{headers:{ Authorization: token}})
                .then(()=>
                {
                   location.reload()
                })
        },
    }
}
</script>

<!--$('#datatable').DataTable({-->
<!--serverSide: true,-->
<!--processing: true,-->
<!--pageLength: 5,-->
<!--ajax: {-->
<!--url: process.env.VUE_APP_BASE_URL+"/getdata/",-->
<!--headers:{Authorization: token},-->
<!--method: 'get',-->
<!--data: function (data) {-->
<!--console.log(data['QuestionData']);-->
<!--let columnId = data.order[0].column;-->
<!--data.order[0].name = data.columns[columnId].data;-->
<!--delete data.columns;-->
<!--},-->
<!--dataSrc: function(jsonData) {-->
<!--return jsonData.data;-->
<!--}-->
<!--},-->
<!--columnDefs : [-->
<!--{-->
<!--targets: 1,-->
<!--data: "title",-->
<!--sortable: true,-->
<!--},-->
<!--{-->
<!--targets: 1,-->
<!--data: "content",-->
<!--sortable: true,-->
<!--},-->
<!--],-->
<!--});-->
<!--//$('#datatable').table();-->
<!--let scheduleTable = $('.table').DataTable();-->
<!--scheduleTable.draw(false);-->
