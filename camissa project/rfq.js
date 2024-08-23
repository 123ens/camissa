function toggleQuoteForm() {
    var modal = document.getElementById("quoteModal");
    var form = document.getElementById("quoteForm");
  
    if (modal.style.display === "block") {
      modal.style.display = "none";
    } 
    else {
      modal.style.display = "block";
      form.style.display = block; // Show the form when the modal is opened
    }
  }

document.querySelector('.quoteForm form').addEventListener('submit', function(event) {
 event.preventDefault(); // Prevent the default form submission
 //Handle form submission logic here //(e.g. AJAX request)
    toggleQuoteForm(); // Optionally close the modal after submission
}); 

// Close the modal when clicking outside of it
window.onclick = function(event) {
    var modal = document.getElementById("quoteModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
