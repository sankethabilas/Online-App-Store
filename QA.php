<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="css/QAstyle.css">
</head>
<body>
    <div class="container">
        <h1>HELP DESK</h1>
        <p>Enter your Problem Below</p>
        <form>
            <label for="request-type">Request Type</label>
            <select id="request-type" required>
                <option value="">Select</option>
                <option value="technical">Technical</option>
                <option value="billing">Billing</option>
                <option value="general">General</option>
            </select>

           

            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Name" required>

            <label for="mobile">Mobile Number</label>
            <input type="tel" id="mobile" placeholder="07196456787" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Email Address" required>

            <label for="problem">Enter your Problem</label>
            <textarea id="problem" placeholder="Your Problem" required></textarea>

            <button type="submit">REQUEST</button>
        </form>
    </div>
</body>
</html>