<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="css/helpdesk.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>

<body>


    <?php
    include "header2.php";
    ?>

    <div class="container">
        <h1>HELP DESK</h1>
        <p>Enter your Problem Below</p>
        <form method="POST" action="helpdeskProcess.php">

            <label for="request-type">Request Type</label>
            <select id="request-type" required name="type">
                <option value="">Select</option>
                <option value="technical">Technical</option>
                <option value="billing">Billing</option>
                <option value="general">General</option>
            </select>



            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Name" required name="name">

            <label for="mobile">Mobile Number</label>
            <input type="tel" id="mobile" placeholder="07196456787" required name="mobile">

            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Email Address" required name="email">

            <label for="problem">Enter your Problem</label>
            <textarea id="problem" placeholder="Your Problem" required name="problem"></textarea>

            <button type="submit">REQUEST</button>
        </form>
    </div>

   


    <?php
    include "footer.php"

    ?>
</body>

</html>