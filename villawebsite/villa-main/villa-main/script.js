let index = 0;
displayImages();
function displayImages() {
  let i;
  const images = document.getElementsByClassName("image");
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  index++;
  if (index > images.length) {
    index = 1;
  }
  images[index-1].style.display = "block";
  setTimeout(displayImages, 6000); 
}

const urlParams = new URLSearchParams(window.location.search);
    let villa = urlParams.get('villa');
    
    // Define the variable to be passed to PHP
    

    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index2.php", true);

    // Set the content type header for POST requests
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Send the variable as part of the request
    xhr.send("villa=" + villa);


    