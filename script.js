'use strict';
// const facts = document.querySelector('.facts-container');
const container = document.querySelector('.facts-container');
const but = document.querySelector('.facts-link');
// const cars = document.querySelector('.our-cars');
// console.log(facts , cars);
// console.log(container,but);
but.addEventListener('click',()=>{
    container.scrollIntoView({behavior:'smooth'});
})
