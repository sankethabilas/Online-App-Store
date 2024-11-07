<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions || App Store</title>
    <link rel="stylesheet" href="css/FAQ.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>

<body>
    <?php
    include "header2.php";
    ?>
    <br>
    <div class="container">
        <h1>Frequently Asked Questions</h1>

        <div class="search-container">
            <span class="search-icon"><img src="resource/search icon.png" alt="" class="searchImg"></span>
            <input type="text" id="search" placeholder="What are you looking for?">
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    Who should use our App Store?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    Our App Store is designed for anyone looking for high-quality, vetted applications.
                    Whether you're a casual user or a professional, you'll find apps that suit your needs.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    What is required to use our App Store?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    To use our App Store, you simply need a compatible device and an internet connection.
                    Create a free account to start downloading apps. Some apps may require specific hardware or
                    software requirements, which will be listed on their individual pages.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    Do I need to have coding skills to use the apps?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    No, coding skills are not required for most apps in our store.
                    We offer a wide range of user-friendly applications suitable for all skill levels.
                    However, some specialized developer tools may require coding knowledge.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    How do I get support for an app I've downloaded?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    For app-specific support, please refer to the support information provided on the app's page in
                    our store. For general App Store inquiries, you can contact our customer support team through
                    the chat button or our help center.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    Why should I choose our App Store over similar platforms?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    Our App Store offers a curated selection of high-quality apps, robust security measures, and
                    excellent customer support. We also provide competitive pricing and frequent updates to ensure
                    the best user experience.
                </div>
            </div>
        </div>

        <button class="chat-button" aria-label="Open chat"><a href="helpdesk.php">
                <img src="resource/help-desk.png" alt="" class="helpDeskImg"></a></button>

        <br><br>

        <?php

        include "connection.php";



        $sql1 = "SELECT * FROM help_desk";
        $user_rs = $conn->query($sql1);




        ?>

        <div class='tablebox'>
            <h1>Support ticket history</h1>
            <div class='table-container'>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Problem</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($user_details = $user_rs->fetch_assoc()) {
                        ?>
                            <tr data-id="<?php echo $user_details["id"]; ?>">
                                <td><?php echo $user_details["id"]; ?></td>
                                <td><?php echo $user_details["name"] ?></td>
                                <td><?php echo $user_details["mobile"] ?></td>
                                <td><?php echo $user_details["email"] ?></td>
                                <td><?php echo $user_details["problem"] ?></td>
                                <td>
                                    <div class='action-buttons'>
                                        <button class='edit-btn' onclick="editTicket(<?php echo $user_details['id']; ?>)">Edit</button>
                                        <button class='delete-btn' onclick="deleteTicket(<?php echo $user_details['id']; ?>)">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>





            <br><br>
            <?php

            include "footer.php";

            ?>

            <script>
                document.querySelectorAll('.faq-question').forEach(question => {
                    question.addEventListener('click', () => {
                        const answer = question.nextElementSibling;
                        const toggle = question.querySelector('.faq-toggle');
                        if (answer.style.display === 'block') {
                            answer.style.display = 'none';
                            toggle.textContent = '+';
                        } else {
                            answer.style.display = 'block';
                            toggle.textContent = '-';
                        }
                    });
                });

                document.getElementById('search').addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    document.querySelectorAll('.faq-item').forEach(item => {
                        const question = item.querySelector('.faq-question').textContent.toLowerCase();
                        const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            </script>
        </div>

        <script src="FAQscript.js"></script>
</body>

</html>