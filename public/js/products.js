$(document).ready(function () {
    $(".filer-item").click(function () {
      const value = $(this).attr("data-filter").toLowerCase();
      if (value === "all") {
        $(".paginate").show(500)
        $(".col").show(1000);
      } else {
        $(".paginate").hide()
        $(".col")
          .not("." + value)
          .hide(1000);
        $(".col")
          .filter("." + value)
          .show(1000);
      }
    });

    $(".filer-item").click(function () {
      $(this).addClass("active-fil").siblings().removeClass("active-fil");
    });
  });
