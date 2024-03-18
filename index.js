$(document).ready(function () {
  // Banner Owl Carousel
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
  });

  // Top Sale Owl carousel

  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // isotope filter

  var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    layoutMode: "fitRows",
  });

  // Filter items on button click
  $(".button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });

  // New Phones Owl carousel
  $("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // Blogs Owl Carousel
  $("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
    },
  });

  /*  Product Quantity Section */
  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");
  let $input = $(".qty qty_input");

  // Click on qty_up button
  $qty_up.click(function (e) {
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

    // change product price using ajax call
    $.ajax({
      url: "template/ajax.php", // corrected 'uri' to 'url'
      type: "post",
      data: { itemid: $(this).data("id") },
      success: function (result) {
        let obj = JSON.parse(result);
        let item_price = obj[0]["item_price"];

        if ($input.val() >= 1 && $input.val() <= 9) {
          $input.val(function (i, oldval) {
            return ++oldval;
          });
        }

        // increase price of the product
        $price.text(parseInt(item_price * $input.val()).toFixed(2));
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText); // Log any errors to the console for debugging
      },
    });
  });

  

  // Click on qty_down button
  $qty_down.click(function (e) {
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);

    if ($input.val() > 1 && $input.val() <= 10) {
      $input.val(function (i, oldval) {
        return --oldval;
      });
    }
  });
});
