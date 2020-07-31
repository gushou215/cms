$(".submenu").click(function(){
    let i = $(".submenu").index(this);
    // console.log(i);
    sessionStorage.setItem('current_menu_index',i);
});

let currentMenuIndex = sessionStorage.getItem('current_menu_index');
// console.log($(".submenu"));
// console.log(currentMenuIndex);
$(".submenu").eq(currentMenuIndex).children("ul").css('display','block');
