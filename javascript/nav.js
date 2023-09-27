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
const searchBar = document.querySelector('#desktop-search');
searchIconDiv.classList.add('search-icon');

searchIconEntry.append(searchIconDiv);
primaryMenu.append(searchIconEntry);

document.addEventListener('click',function handleOutsideClick(event){ 

    // ignore search icon
    if(event.target.classList.contains('search-icon')){
        return;
    }

    // if search bar doesn't have hidden class and the elements id isn't desktop-search
    if(!searchBar.classList.contains('hidden') && event.target.id !== 'desktop-search'){
        console.log('closing menu')
        searchBar.classList.add('hidden');
        primaryMenu.classList.add('md:flex');
    }
    // console.log(event.target.id !== 'desktop-search', !searchBar.classList.contains('hidden'));
});

searchIconDiv.addEventListener('click',()=>{
    if(searchBar.classList.contains('hidden')){
        primaryMenu.classList.remove('md:flex');
        searchBar.classList.remove('hidden');
    }
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
