$(function () {
    console.log("DOM is fully loaded and parsed");

    $(document).on("click", `#add-product`, () => {
        let data = {
            'name': $('#name').val(),
            'quantity': $('#quantity').val(),
            'price': $('#price').val(),
            'rental_period': $('#rental_period').val(),
            'status': $('#status').val(),
            'brand_id': $('#brand_id').val(),
            'category_id': $('#category_id').val(),
            'color_id': $('#color_id').val(),
            'size': $('#size').val(),
            'material': $('#material').val(),
            'condition': $('#condition').val(),
            'description': $('#description').val(),
        };

        console.log(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/product-add',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function (response) {
                $('#alert-msg').text('Product added successfully!').addClass('alert-success');
            },
            error: function (error) {
                $('#alert-msg').text('An error occurred.').addClass('alert-danger');
            }
        });
    });

});
