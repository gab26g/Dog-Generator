$(document).ready(function () {
  console.log("ready!");

  $('.generate-dog').click(() => {
      const selectedBreed = $('#breed-selector').val();

      $.ajax({
          url: '/fetch_dog',
          type: 'GET',
          data: { breed: selectedBreed },
          success: function (response) {
              if (response.image_url) {
                  $('#image-container').html('');
                  const imgElement = $('<img>')
                      .attr('src', response.image_url)
                      .attr('alt', 'Random Dog');
                  $('#image-container').append(imgElement);
              } else {
                  console.error('Failed to fetch image:', response.error);
              }
              console.log(response);
          },
          error: function (xhr) {
              console.error('Error:', xhr.responseText);
          }
      });
  });
});

