import Dashboard from "./components/Dashboard.vue";
import ListAppointments from "./pages/appoinments/ListAppointments.vue";
import UserList from "./pages/users/UserList.vue";
import UpdateSetting from "./pages/settings/UpdateSetting.vue";
import UpdateProfile from "./pages/profile/UpdateProfile.vue";

    export default [
        {
            path : '/admin/dashboard',
            name : 'admin.dashboard',
            component : Dashboard,
        },

        {
            path : '/admin/appointments',
            name : 'admin.appointments',
            component : ListAppointments,
        },

        {
            path : '/admin/users',
            name : 'admin.users',
            component : UserList,
        },

        {
            path : '/admin/settings',
            name : 'admin.settings',
            component : UpdateSetting,
        },

        {
            path : '/admin/profile',
            name : 'admin.profile',
            component : UpdateProfile,
        }


    ]
