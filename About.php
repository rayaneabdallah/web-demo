
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Stories Coffee</title>
</head>

<body>
    <header>
        <a href="index.html" class="logo">STORIES</a>
        <nav class="navigation">
            <a href="index.html">Home</a>
            <a href="Menu.html">Menu</a>
            <a href="About.php">About Us</a>
        </nav>
    </header>
    <br><br>
    <section class="About">
        <h2 class="Aboutt">About Us</h2>
        <br>
        <div>
            <p id="Aboutp">
                At Stories, we blend Lebanese coffee traditions with a modern twist. Our cozy corner in Beirut invites
                you to create
                your own tale one sip at a time.Stories Coffee welcomes you. Come sip, chat, and make memories with us.
            </p>
        </div>
    </section>
        <section class="review">
    <div class="form-container">
        <h2>Show us your love</h2>
        <form action="reviews.php" method="post" id="reviewForm">
            <label for="name">Name:</label>
            <input type="text" id="costumer_name" name="name" required>
            <br>
            <label for="review">Review:</label>
            <br>
            <textarea id="costumer_review" name="review" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <h2>Customer Reviews</h2>
    <table id="reviewsTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
            <!--l7 tnzed elreviews hon-->
        </tbody>
    </table>
    <script>
        document.getElementById('reviewForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const review = document.getElementById('review').value;
            const table = document.getElementById('reviewsTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            const nameCell = newRow.insertCell(0);
            const reviewCell = newRow.insertCell(1);
            nameCell.textContent = name;
            reviewCell.textContent = review;
            document.getElementById('reviewForm').reset();
        }
    </script>
    </section>
    <br> <br>
    <footer class="footer">
        <p class="footer-title">Copy rights @<span>Coffee StoriesLB</span></p>
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    
    </footer>
</body>

</html>