import HelloWorld from '../components/HelloWorld';
import EduUserList from '../edu-components/EduUserList';
import EduUserDetails from '../edu-components/EduUserDetails';
import EduUserEdit from '../edu-components/EduUserEdit';

export default [
	{ path: "/", component: HelloWorld },
	{ path: "/edu-user-list", component: EduUserList, name: "userList" },
	//{ path: "/edu-user-details/:id", component: EduUserDetails },
	//{ path: "/edu-user-details/:id/edit", component: EduUserDetails }
	{ path: "/edu-user-details/:id", component: EduUserDetails, name: "userDetails", children: [
		{ path: "edit", component: EduUserEdit, name: "userEdit" }
	]}
];