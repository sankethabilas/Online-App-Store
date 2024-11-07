function editTicket(id) {
  
  fetch(`get_ticket.php?id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      
      const form = `
                <form id="edit-form" style="max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <input type="hidden" name="id" value="${data.id}">
    
    <label for="name" style="display: block; margin-bottom: 8px; font-weight: bold;">Name:</label>
    <input type="text" id="name" name="name" value="${data.name}" required 
           style="width: 100%; padding: 10px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    
    <label for="mobile" style="display: block; margin-bottom: 8px; font-weight: bold;">Mobile:</label>
    <input type="tel" id="mobile" name="mobile" value="${data.mobile}" required 
           style="width: 100%; padding: 10px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    
    <label for="email" style="display: block; margin-bottom: 8px; font-weight: bold;">Email:</label>
    <input type="email" id="email" name="email" value="${data.email}" required 
           style="width: 100%; padding: 10px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    
    <label for="problem" style="display: block; margin-bottom: 8px; font-weight: bold;">Problem:</label>
    <textarea id="problem" name="problem" required 
              style="width: 100%; padding: 10px; height: 80px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">${data.problem}</textarea>
    
    <div style="margin-top: 16px;">
        <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Save Changes</button>
        <button type="button" onclick="closeEditForm()" 
                style="padding: 10px 20px; background-color: #dc3545; color: white; border: none; border-radius: 4px; margin-left: 10px; cursor: pointer;">Cancel</button>
    </div>
</form>

            `;

      var modal = document.createElement("div");
      modal.innerHTML = form;
      modal.style.position = "fixed";
      modal.style.top = "50%";
      modal.style.left = "50%";
      modal.style.transform = "translate(-50%, -50%)";
      modal.style.backgroundColor = "white";
      modal.style.padding = "20px";
      modal.style.boxShadow = "0 0 10px rgba(0,0,0,0.1)";
      document.body.appendChild(modal);

     
      document.getElementById("edit-form")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          const formData = new FormData(this);
          fetch("update_ticket.php", {method: "POST",body: formData,})
            .then((response) => response.json())
            .then((result) => {
              if (result.success) {
                alert("Ticket updated successfully");
                location.reload(); 
              } else {
                alert("Error updating ticket");
              }
            });
        });
    });
}

function closeEditForm() {
  document.querySelector('div[style*="position: fixed"]').remove();
}

function deleteTicket(id) {
  if (confirm("Are you sure you want to delete this ticket?")) {
    fetch(`delete_ticket.php?id=${id}`, { method: "DELETE",})
      .then((response) => response.json())
      .then((result) => {
        if (result.success) {
          alert("Ticket deleted successfully");
          document.querySelector(`tr[data-id="${id}"]`).remove();
        } else {
          alert("Error deleting ticket");
        }
      });
  }
}
