import HelloWorld from '../components/HelloWorld';
import EduUserList from '../edu-components/EduUserList';
import EduUserDetails from '../edu-components/EduUserDetails';

export default [
	{ path: "/", component: HelloWorld },
	{ path: "/edu-user-list", component: EduUserList },
	{ path: "/edu-user-details/:id", component: EduUserDetails }
];