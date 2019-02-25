import HelloWorld from '../components/HelloWorld';
import EduHomeNavigation from '../edu-components/Home/EduHomeNavigation';
import EduUserList from '../edu-components/User/EduUserList';
import EduUserDetails from '../edu-components/User/EduUserDetails';
import EduUserEdit from '../edu-components/User/EduUserEdit';
import EduUserNavigation from '../edu-components/User/EduUserNavigation';

export default [
    //{ path: "/", redirect: "/edu-user-list" },
    { path: "/", redirect: { name: "userList" } },
    // { path: "/", component: HelloWorld },
    { path: "/home", components: {
        default: HelloWorld,
        header: EduHomeNavigation
    } },
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
            { path: "edit", component: EduUserEdit, name: "userEdit", props: true }
        ]}
];