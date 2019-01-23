import Slideshow from "../edu-components/EduSlideshow";

export default [
    { path: "/", redirect: "/slide/1" },
    { path: "/slide/:index", component: Slideshow }
];