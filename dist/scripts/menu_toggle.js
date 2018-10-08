var hamburger=document.getElementById("menu-toggle"),menu=document.getElementById("mobile-nav"),mobileActive=!1;function toggleMobile(){mobileActive?(mobileActive=!1,menu.removeAttribute("style")):(mobileActive=!0,menu.setAttribute("style","display:block;"))}hamburger.addEventListener("click",toggleMobile);
//# sourceMappingURL=menu_toggle.js.map
