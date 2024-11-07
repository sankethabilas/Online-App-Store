function editUser(email) {
 
  fetch(`admin_get_user.php?email=${encodeURIComponent(email)}`)
    .then((response) => response.json())
    .then((data) => {
      
      const form = `
            <div class="box" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="form-container" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Edit User</h2>
        <form id="edit-user-form" style="display: flex; flex-direction: column;">
            <input type="hidden" name="email" value="${data.email}">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="fname" style="display: block; margin-bottom: 5px;">First Name:</label>
                <input type="text" id="fname" name="fname" value="${
                  data.fname
                }" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="lname" style="display: block; margin-bottom: 5px;">Last Name:</label>
                <input type="text" id="lname" name="lname" value="${
                  data.lname
                }" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="mobile" style="display: block; margin-bottom: 5px;">Mobile:</label>
                <input type="tel" id="mobile" name="mobile" value="${
                  data.mobile
                }" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="gender" style="display: block; margin-bottom: 5px;">Gender:</label>
                <select id="gender" name="gender" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="Male" ${
                      data.gender === "Male" ? "selected" : ""
                    }>Male</option>
                    <option value="Female" ${
                      data.gender === "Female" ? "selected" : ""
                    }>Female</option>
                </select>
            </div>
            <div class="button-group" style="display: flex; justify-content: space-between;">
                <button type="button" onclick="closeEditForm()" style="padding: 8px 12px; background-color: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer;">Cancel</button>
                <button type="submit" style="padding: 8px 12px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Save Changes</button>
            </div>
        </form>
    </div>
</div>

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

      document
        .getElementById("edit-user-form")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          const formData = new FormData(this);
          fetch("admin_update_user.php", {
            method: "POST",
            body: formData,
          })
            .then((response) => response.json())
            .then((result) => {
              if (result.success) {
                alert("User updated successfully");
                location.reload(); 
              } else {
                alert("Error updating user");
              }
            });
        });
    });
}

function closeEditForm() {
  document.querySelector('div[style*="position: fixed"]').remove();
}

function deleteUser(email) {
  if (confirm("Are you sure you want to delete this user?")) {
    fetch(`admin_delete_user.php?email=${encodeURIComponent(email)}`, {
      method: "DELETE",
    })
      .then((response) => response.json())
      .then((result) => {
        if (result.success) {
          alert("User deleted successfully");
          document.querySelector(`tr[data-id="${email}"]`).remove();
        } else {
          alert("Error deleting user");
        }
      });
  }
}

function respondToTicket(id) {
  fetch(`admin_get_ticket.php?id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      const form = `
        <form id="respond-ticket-form" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto;">
          <input type="hidden" name="id" value="${data.id}">
          <p style="font-weight: bold; margin-bottom: 10px;"><strong>Problem:</strong> ${data.problem}</p>
          
          <div style="margin-bottom: 15px;">
            <label for="response" style="display: block; margin-bottom: 5px;">Response:</label>
            <textarea id="response" name="response" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; height: 100px; box-sizing: border-box;"></textarea>
          </div>

          <div style="display: flex; justify-content: space-between;">
            <button type="submit" style="padding: 10px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Send Response</button>
            <button type="button" onclick="closeResponseForm()" style="padding: 10px 15px; background-color: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer;">Cancel</button>
          </div>
        </form>
      `;

      const modal = document.createElement("div");
      modal.innerHTML = form;
      modal.style.position = "fixed";
      modal.style.top = "0";
      modal.style.left = "0";
      modal.style.width = "100%";
      modal.style.height = "100%";
      modal.style.backgroundColor = "rgba(0,0,0,0.5)";
      modal.style.display = "flex";
      modal.style.justifyContent = "center";
      modal.style.alignItems = "center";
      document.body.appendChild(modal);

      document.getElementById("respond-ticket-form").addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        fetch("admin_respond_ticket.php", {method: "POST",body: formData,})
        //get from chat gpt
          .then((response) => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then((result) => {
            if (result.success) {
              alert("Response sent successfully");
              location.reload();
            } else {
              throw new Error(result.error || 'Unknown error occurred');
            }
          })
         
      });
    })
    
}

function closeResponseForm() {
  document.querySelector('div[style*="position: fixed"]').remove();
}