
$(document).ready(function () {
    // Function to generate slug from title
    function generateSlug(title) {
        return title
            .toString()                        // Ensure it's a string
            .toLowerCase()                     // Convert to lowercase
            .trim()                            // Remove extra spaces
            .replace(/[^a-z0-9\s-]/g, '')      // Remove invalid characters
            .replace(/\s+/g, '-')              // Replace spaces with dashes
            .replace(/-+/g, '-');              // Replace multiple dashes with a single one
    }

    $('#title').on('keyup change', function () {
        var title = $(this).val();
        var slug = generateSlug(title);  // Generate slug from title
        $('#slug').val(slug).trigger('input');            // Set the slug input value
    });
});

