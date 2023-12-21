<!-- <?php
 include 'navbar.html';?> -->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start; /* Align items to the start of the flex container */
            padding: 20px;
        }

        .gallery-item {
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item img {
            max-width: 550px;
            border-radius: 8px;
        }

        .gallery-item:hover {
            transform: scale(1.1);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            margin: auto;
            border: 4px solid #fff;
        }

        .modal-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 20px;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="gallery-container">
    <div class="gallery-item" onclick="openModal('images/A1.png')">
        <img src="images/A1.png" alt="Image 1">
    </div>
    <div class="gallery-item" onclick="openModal('images/A2.png')">
        <img src="images/A2.png" alt="Image 2">
    </div>
    <div class="gallery-item" onclick="openModal('images/A3.png')">
        <img src="images/A3.png" alt="Image 3">
    </div>
    <div class="gallery-item" onclick="openModal('images/A4.png')">
        <img src="images/A4.png" alt="Image 4">
    </div>
    <div class="gallery-item" onclick="openModal('images/A5.png')">
        <img src="images/A5.png" alt="Image 5">
    </div>
    <div class="gallery-item" onclick="openModal('images/A6.png')">
        <img src="images/A6.png" alt="Image 5">
    </div>
    <!-- <div class="gallery-item" onclick="openModal('images/A6.png')">
        <img src="images/A6.png" alt="Image 5">
    </div> -->
    

    <!-- Add more gallery items as needed -->
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" alt="Enlarged Image">
    </div>
</div>

<script>
    function openModal(imageSrc) {
        var modal = document.getElementById('myModal');
        var modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.style.display = 'flex';
    }

    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }
</script>

</body>
</html>
