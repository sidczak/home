import Slideshow from "../components/EduSlideshow";

export default [
    { path: "/", redirect: "/slide/1" },
    { path: "/slide/:index", component: Slideshow }
];