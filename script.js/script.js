document.addEventListener("DOMContentLoaded", function() {
   // Get references to the select boxes and search button
   const categorySelect = document.getElementById("category-select");
   const tagSelect = document.getElementById("tag-select");
   const authorSelect = document.getElementById("author-select");
   const searchButton = document.getElementById("search-button");
   const searchResults = document.getElementById("search-results");

   // Add an event listener to the search button
   searchButton.addEventListener("click", function() {
      // Get the selected values from the select boxes
      const selectedCategory = categorySelect.value;
      const selectedTag = tagSelect.value;
      const selectedAuthor = authorSelect.value;

      // Perform an AJAX request to fetch search results based on the selected values
      // You can use the WordPress REST API or a custom PHP script to handle the search
      // and return results as JSON.

      // For example, you can use the jQuery AJAX method like this:
      // jQuery.ajax({
      //    url: "your-api-endpoint.php",
      //    method: "GET",
      //    data: {
      //       category: selectedCategory,
      //       tag: selectedTag,
      //       author: selectedAuthor
      //    },
      //    success: function(data) {
      //       // Display the search results on the page
      //       searchResults.innerHTML = data;
      //    }
      // });

      // You would need to replace "your-api-endpoint.php" with the actual endpoint
      // that handles the search and returns results.

      // For simplicity, we'll just display a message here
      searchResults.innerHTML = `<p>Search results for Category: ${selectedCategory}, Tag: ${selectedTag}, Author: ${selectedAuthor}</p>`;
   });
});
