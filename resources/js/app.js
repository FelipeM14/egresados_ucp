/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

let app = new Vue({
    el: '#app',
    data: {
        permissions: [],
        role_permissions: '',
        columns:[],
        graduate_id:'',
        data:[],
        graduates:{},
        index:[],
        graduate_delete:'',
    },
    created: function () {

        if ($('#role_app').val() === "1") {
            this.getNoPermissions(this.getIdRole());
            this.getRolePermissions(this.getIdRole());
        }
        if($('#graduate_app').val() === "1"){
            this.getGraduates();
        }
    },

    methods: {
        getIdRole: function () {
            return $('#role_v').val();
        },
        getNoPermissions: function (id) {
            let url = '../../permissions_np/' + id;
            axios.get(url).then(response => {
                this.permissions = response.data;
            });
        },
        getRolePermissions: function (id) {
            let url = '../../permissions_role/' + id;
            axios.get(url).then(response => {
                this.role_permissions = response.data;
                console.log(this.role_permissions);
            });
        },
        addPermission: function (id) {
            let url = '../../permissions_to_role';
            let role_id = this.getIdRole();
            console.log('id ' + id);
            axios.post(url, {
                permission_id: id,
                role_id: role_id,
            }).then(response => {
                this.getNoPermissions(role_id);
                this.getRolePermissions(role_id);
                toastr.success('Permiso agregado correctamente');
            }).catch(error => {
                toastr.error('Error al agregar el permiso');
            });
        },
        deletePermission: function (permission_id) {

            let role_id = this.getIdRole();
            let url = '../../delete_permissions_role/' + role_id+'/'+permission_id;
            axios.delete(url).then(response => {
                this.getNoPermissions(role_id);
                this.getRolePermissions(role_id);
                toastr.success('Permiso eliminado correctamente');
            }).catch(error => {
                toastr.error('Error al eliminar el permiso');
            });
        },
        getCols:function (){
            axios.get('../../get_columns').then(response => {
                this.columns = response.data[0];
                this.graduate_id = response.data[1];
            })

        },
        createNewRegistry:function () {
            axios.get('../../new_registry').then(response => {
                this.getGraduates()
            }).catch(error => {
                console.log(error);
            })
        },
        storeColumnGraduate:function (col, index) {

            let id = this.index[index];
            console.log(id);
            console.log(this.graduates[id][col]);

            axios.put('../../store_col_graduate/'+index, {
                col:this.graduates[id][col],
                name:col
            }).then(response =>{
                console.log('ok')
            }).catch(error =>{
                console.log('error')
            })
        },
        getGraduates:function (page = 1) {

            this.getCols();
            let data = [];

            axios.get('../../get_graduates?page='+page).then(response => {
                this.graduates = response.data;
                console.log(response.data);
                $.each(response.data.data, function (index, value) {
                  data[value.id] = index;
                });
            }).catch(error => {
                console.log(error);
            });

            this.index = data;
        },
        deleteQuestion:function (id) {

            this.graduate_delete = id;

            $('#delete_r').text(id);
            $('.bd-example-modal-sm').modal('show');
        },
        deleteRegister:function () {

            axios.delete('graduate_delete/'+this.graduate_delete).then(response =>{
                toastr.success('El egresado fue elimiando correctamente!');
                this.getGraduates();
                $('.bd-example-modal-sm').modal('hide');
            }).catch(error =>{
                toastr.error('Error al eliminar el usuario');
            })
        }
    }
});
