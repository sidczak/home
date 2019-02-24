import HelloWorld from '../components/HelloWorld';
import EduHomeNavigation from '../edu-components/Home/EduHomeNavigation';
import EduUserList from '../edu-components/User/EduUserList';
import EduUserDetails from '../edu-components/User/EduUserDetails';
import EduUserEdit from '../edu-components/User/EduUserEdit';
import EduUserNavigation from '../edu-components/User/EduUserNavigation';

export default [
    // { path: "/", component: HelloWorld },
    { path: "/", components: {
        default: HelloWorld,
        header: EduHomeNavigation
    } },
    // { path: "/edu-user-list", component: EduUserList, name: "userList" },
    { path: "/edu-user-list", components: {
        default: EduUserList,
        header: EduUserNavigation
    }, name: "userList" },
    //{ path: "/edu-user-details/:id", component: EduUserDetails },
    //{ path: "/edu-user-details/:id/edit", component: EduUserDetails }
    { path: "/edu-user-details/:id", component: EduUserDetails, name: "userDetails", children: [
        { path: "edit", component: EduUserEdit, name: "userEdit" }
    ]}
];