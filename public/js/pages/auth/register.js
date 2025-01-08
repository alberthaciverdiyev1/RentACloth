$(function () {
    console.log("DOM is fully loaded and parsed");

    $(function () {
        console.log("DOM is fully loaded and parsed");
    
        // Click event for the element with name="register"
        $(document).on("click", `[name="register"]`, function () {
            let data = {
                email: $(`[name="email"]`).val(),
                confirmPassword: $(`[name="confirmPassword"]`).val(),
                password: $(`[name="password"]`).val(),
            };
    
            // Clear previous error messages
            $(`.error-message`).remove();
    
            // Check if the email field is empty
            if (!data.email) {
                $(`[name="email"]`).after(`<span class="error-message">Email is required</span>`);
            }
            if (!data.password) {
                $(`[name="password"]`).after(`<span class="error-message">Password is required</span>`);
            }
            if (!data.confirmPassword) {
                $(`[name="confirmPassword"]`).after(`<span class="error-message">Confirm password is required</span>`);
            }
            if (data.confirmPassword !== data.password) {
                $(`[name="confirmPassword"]`).after(`<span class="error-message">Password does not match</span>`);
            }
            console.log(data);
        });
    });
    
});
