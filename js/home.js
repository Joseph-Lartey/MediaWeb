// Get the modal elements
var videographyModal = document.getElementById("videography-modal");
var photographyModal = document.getElementById("photography-modal");
var editingModal = document.getElementById("editing-modal");
var streamingModal = document.getElementById("streaming-modal");

// Get the service elements
var videographyService = document.querySelector(".service img[alt='Videography']");
var photographyService = document.querySelector(".service img[alt='Photography']");
var editingService = document.querySelector(".service img[alt='Editing']");
var streamingService = document.querySelector(".service img[alt='Event Live Streaming']");

// Get the <span> element that closes the modal
var spanClose = document.getElementsByClassName("close");

// When the user clicks on the service, open the corresponding modal
videographyService.onclick = function() {
    videographyModal.style.display = "block";
}

photographyService.onclick = function() {
    photographyModal.style.display = "block";
}

editingService.onclick = function() {
    editingModal.style.display = "block";
}

streamingService.onclick = function() {
    streamingModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spanClose.length; i++) {
    spanClose[i].onclick = function() {
        this.parentElement.parentElement.style.display = "none";
    }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == videographyModal || event.target == photographyModal || event.target == editingModal || event.target == streamingModal) {
        event.target.style.display = "none";
    }
}
