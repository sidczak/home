import HelloWorld from '../components/HelloWorld';
import EduHomeNavigation from '../edu-components/Home/EduHomeNavigation';
import EduUserList from '../edu-components/User/EduUserList';
//import EduUserDetails from '../edu-components/User/EduUserDetails';
//import EduUserEdit from '../edu-components/User/EduUserEdit';
import EduUserNavigation from '../edu-components/User/EduUserNavigation';
import EduUserLogin from '../edu-components/User/EduUserLogin';

//import("path").then(module => module.default);

// tworzy dynamicznie 2 nowe pliki przy ładowaniu modułu
//const EduUserEdit = () => import('../edu-components/User/EduUserEdit');
//const EduUserDetails = () => import('../edu-components/User/EduUserDetails');

// tworzy dynamicznie 1 nowy plik (web/build/user.js) przy ładowaniu modułu
const EduUserEdit = () => import(/* webpackChunkName: "user" */ '../edu-components/User/EduUserEdit');
const EduUserDetails = () => import(/* webpackChunkName: "user" */ '../edu-components/User/EduUserDetails');

export default [
    //{ path: "/", redirect: "/edu-user-list" },
    { path: "/", redirect: { name: "userList" } },
    // { path: "/", component: HelloWorld },
    { path: "/home", components: {
        default: HelloWorld,
        header: EduHomeNavigation
    }, name: "home" },
    // { path: "/edu-user-list", component: EduUserList, name: "userList" },
    { path: "/edu-user-list", components: {
        default: EduUserList,
        header: EduUserNavigation
    }, name: "userList", alias: "/clients" },
    //{ path: "/edu-user-details/:id", component: EduUserDetails },
    //{ path: "/edu-user-details/:id/edit", component: EduUserDetails }
    { 
        path: "/edu-user-details/:id", 
        component: EduUserDetails, 
        name: "userDetails",
        props: true,
        children: [
            { path: "edit", component: EduUserEdit, name: "userEdit", props: true, meta: { auth: true } }
        ]
    },
    {
        path: "/login",
        component: EduUserLogin,
        name: "login"
    }
];