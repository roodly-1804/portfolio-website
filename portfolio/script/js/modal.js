// // Get the modal
// var modal = document.getElementById("myModal");

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById("myImg");
// var modalImg = document.getElementById("img");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }
// Get all the image elements
var images = document.getElementsByClassName("myImg");

// Get the modal element
var modal = document.getElementById("myModal");

// Get the image element inside the modal
var modalImg = document.getElementById("img");

// Get the caption element inside the modal
var caption = document.getElementById("caption");

// Title of the image
var title = document.getElementById("imgTitle");

// Description of the image
var description = document.getElementById("imgDesc");

// Link to download
var link = document.getElementById("imgLink");

// Get the close button element
var closeBtn = document.getElementsByClassName("close");

// Attach click event listeners to each image
for (var i = 0; i < images.length; i++) {
  images[i].onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    var captionContainer = this.nextElementSibling;
    title.innerHTML = captionContainer.querySelector("#imgTitle").innerHTML;
    description.innerHTML = captionContainer.querySelector("#imgDesc").innerHTML;
    link.href = captionContainer.querySelector("#imgLink").href;
  };
}

// Attach click event listeners to each close button
for (var i = 0; i < closeBtn.length; i++) {
  closeBtn[i].onclick = function() {
    modal.style.display = "none";
  };
}