require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
// import {ScrollSmoother} from 'gsap/ScrollSmoother';
import { SplitText } from "gsap/SplitText.js";
import { TextPlugin } from "gsap/TextPlugin.js";

gsap.registerPlugin(ScrollTrigger, SplitText, TextPlugin);

// let smoother = ScrollSmoother.create({
//     wrapper: '#smooth-wrapper',
//     content: '#smooth-content',
//     smooth: 4,
// });
//
// let skipper = document.getElementById('arrow-skip');
//
// skipper.addEventListener('click', (e) => {
//     smoother.scrollTo("#skip", false, "center center")
// });



