
// Filter News
$(document).ready(function () {
    $(".filer-item").click(function () {
      const value = $(this).attr("data-filter").toLowerCase();
      if (value === "all") {
        $(".post-con").show(1000);
      } else {
        $(".post-con")
          .not("." + value)
          .hide(1000);
        $(".post-con")
          .filter("." + value)
          .show(1000);
      }
    });

    $(".filer-item").click(function () {
      $(this).addClass("active-fil").siblings().removeClass("active-fil");
    });
  });
