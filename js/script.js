/* アコーディオン */
$(function () {
  $(".bl_faq_list_inner:first").show(); //ひとつ目は最初から
  $(".bl_faq_list .bl_faq_list_header").click(function () {
    $(this).next(".bl_faq_list_inner").slideToggle(300);
    $(this).toggleClass("open");
  });
});

/* drawer */
$(function () {
  $(".bl_drawerBtn").on("click", function () {
    $(this).toggleClass("active");
    $(".bl_drawer_wrap").toggleClass("active");
    $(".bl_drawer_list").toggleClass("active");
    $("body").toggleClass("noscroll");
  });
});
$(function () {
  //.bl_drawer_itemを押すとついてたactiveが外れてドロワーメニューがひっこむ
  $(".bl_drawer_item").on("click", function () {
    $(".bl_drawerBtn").toggleClass("active");
    $(".bl_drawer_wrap").toggleClass("active");
    $(".bl_drawer_list").toggleClass("active");
    $("body").toggleClass("noscroll");
  });
});
$(function () {
  //.bl_drawer_item a を押すとついてたactiveが外れてドロワーメニューがひっこむ
  $(".bl_drawer_item a").on("click", function () {
    $(".bl_drawerBtn").toggleClass("active");
    $(".bl_drawer_wrap").toggleClass("active");
    $(".bl_drawer_list").toggleClass("active");
    $("body").toggleClass("noscroll");
  });
});

/* スクロールヒント */
new ScrollHint(".js-scrollable");
