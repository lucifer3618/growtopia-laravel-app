window.addEventListener('js-function-success', event => {
        Swal.fire({
            title: "Purchase Success!",
            text: "Your items will be with you within 3-4 bussiness days!",
            icon: "success"
          });
    });


    window.addEventListener('js-function-error', event => {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Your cart is empty!",
          });
    });
