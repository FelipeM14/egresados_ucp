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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let app = new Vue({
    el: '#app',
    data: {
        permissions: [],
        role_permissions: '',
    },
    created: function () {

        if ($('#role_app').val() === "1") {
            this.getNoPermissions(this.getIdRole());
            this.getRolePermissions(this.getIdRole());
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
        deletePermission: function (id) {
            let url = '../../delete_permissions_role/' + id;
            let role_id = this.getIdRole();
            axios.delete(url).then(response => {
                this.getNoPermissions(role_id);
                this.getRolePermissions(role_id);
                toastr.success('Permiso eliminado eliminado');
            }).catch(error => {
                toastr.error('Error al eliminar el permiso');
            });
        },
        quitPermissions: function () {
            $("input[name='permissions']").val('');
            let form = $('#form_roles');
            form.append("<input type='hidden' name='back' value='ok'>");
            form.submit();
        },
        addSpecialPermissions: function () {
            let form = $('#form_roles');
            form.append("<input type='hidden' name='back' value='ok'>");
            form.append("<input type='hidden' name='permissions' value='all-access'>");
            form.submit();
        }
    }
});
