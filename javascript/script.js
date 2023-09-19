/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// render react components
import React from 'react';
import { createRoot } from 'react-dom/client';
import { Test } from '../theme/template-parts/react-blocks';

function renderComponent(Component,ClassQuery){
    const roots = document.querySelectorAll(ClassQuery);
    roots.forEach(root=>{
        createRoot(root).render(<Component/>);
    });
}

renderComponent(Test,'.react-component-test');

// main nav sub-menu code
const menuItems = document.querySelectorAll('#primary-menu > li.menu-item-has-children');

menuItems.forEach(item=>{
    item.addEventListener('mouseover',()=>{
        const submenu = item.querySelector("#primary-menu > li > ul.sub-menu");
        submenu.style.display = "block";
    });

    item.addEventListener('mouseout',()=>{
        const submenu = item.querySelector("#primary-menu > li > ul.sub-menu");
        submenu.style.display = "";
    });
});

// add search icon to primary menu
const primaryMenu = document.querySelector('#primary-menu');
const searchIconEntry = document.createElement('li');
const searchIconDiv = document.createElement('div');
searchIconDiv.classList.add('search-icon');

searchIconEntry.append(searchIconDiv);
primaryMenu.append(searchIconEntry);

searchIconDiv.addEventListener('click',()=>{
    console.log('add search thing here');
});

// mobile nav javascript
const openMenu = document.querySelector('#open-mobile-site-menu');
const closeMenu = document.querySelector('#close-mobile-site-menu');
const mobileSubMenu = document.querySelector('#mobile-primary-menu');

// when pressing hamburger
openMenu.addEventListener('click',()=>{
    // make burger disappear
    openMenu.classList.remove('inline-block');
    openMenu.classList.add('hidden');

    // make x and submenu appear
    closeMenu.classList.remove('hidden');
    closeMenu.classList.add('inline-block');
    mobileSubMenu.classList.remove('hidden');
    mobileSubMenu.classList.add('block');
});

// when pressing x
closeMenu.addEventListener('click',()=>{
    // make x disappear
    closeMenu.classList.remove('inline-block');
    closeMenu.classList.add('hidden');

    // make hamburger and submenu appear
    openMenu.classList.remove('hidden');
    openMenu.classList.add('inline-block');
    mobileSubMenu.classList.remove('block');
    mobileSubMenu.classList.add('hidden');
});

// append icons to menu items with children
const mobileSubMenus = document.querySelectorAll('#mobile-primary-menu > li.menu-item-has-children');

mobileSubMenus.forEach((menu)=>{
    const iconDiv = document.createElement('div');
    const subMenu = menu.querySelector('ul');

    iconDiv.classList.add('sub-menu-icon');
    menu.insertBefore(iconDiv,subMenu);

    iconDiv.addEventListener('click',()=>{
        if(subMenu.style.display){
            subMenu.style.display = ''; 
            iconDiv.classList.remove('active-arrow');
        } else {
            subMenu.style.display = 'block';
            iconDiv.classList.add('active-arrow');
        }
    });
});

// stick after-nav content into wordpress menu because wordpress
const afterNav = document.querySelector('#mobile-after-nav');
const mobileNav = document.querySelector('#mobile-primary-menu');

mobileNav.append(afterNav);
