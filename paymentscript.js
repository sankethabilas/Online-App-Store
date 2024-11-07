function deleteRow(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        fetch('paydelete_process.php?id=' + id, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Record deleted successfully');
                
                document.querySelector(`tr[data-id="${id}"]`).remove();
            } else {
                alert('Error deleting record: ' + data.error);
            }
        })
        
    }
}