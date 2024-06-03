<?php include("base.php") ?>

    <style>
        #display-photos{
            position: relative;
            top: 100px;
            left: 30px;
            height: auto;
            width: 95%;
            justify-content: center;
            padding: 5px;
            margin: 12px;
            border-radius: 5px;
        }
        .img{
            position: relative;
            display: inline;
        }
        .img img{
            margin: 5px;
            width: fit-content;
            height: fit-content;
            max-height: 250px;
            max-width: 300px;
            border: 3px solid black;
        }
        .popup{
            font-family: 'Montserrat','Acme', cursive;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 80%;
            max-width: 1600px;
            height: 90vh;
            max-height: 800px;
            border-radius: 20px;
            background: rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            overflow: hidden;
            transition: 1s;
            opacity: 0;
        }
        .popup.active{
            font-family: 'Montserrat','Acme', cursive;
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        .popup.active .close-btn,
        .popup.active .image-name,
        .popup.active .index,
        .popup.active .large-image,
        .popup.active .arrow-btn{
            font-family: 'Montserrat','Acme', cursive;
            font-size: 24px;
            opacity: 1;
            transition: opacity .5s;
            transition-delay: 1s;
        }
        .top-bar{
            font-family: 'Montserrat','Acme', cursive;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background: #000;
            color: #fff;
            text-align: center;
            line-height: 50px;
            font-weight: 300;
        }
        .close-btn{
            font-family: 'Montserrat','Acme', cursive;
            opacity: 0;
            position: absolute;
            top: 0;
            right: 20px;
            font-size: 60px;
            border-radius: 50%;
            cursor: pointer;
        }
        .large-image{
            margin-top: 5%;
            width: 90%;
            height: 80%;
            object-fit: contain;
            opacity: 0;
        }
        .description p{
            font-family: 'Montserrat','Acme', cursive;
            color: white;
        }

    </style>

<?php include("nav.php"); ?>
<?php include("connection.php"); ?>

    <?php
    $query = "SELECT * FROM `image`";
    $result = mysqli_query($con, $query);  
    ?>
    <!-- popup -->
    <div class="popup">
        <!-- top bar -->
        <div class="top-bar">
            <p class="image-name"><?php echo $data['filename']; ?></p>
            <span class="close-btn">&times;</span>
        </div>
        <!-- image -->
            <img src="./site-gallery/<?php echo $data['filename']; ?>" class="large-image" alt="">
    </div>
    <div id="display-photos">
        <?php
            // while ($data = mysqli_fetch_assoc($result)) {  
        ?>
        <div class="img">
            <img src="./site-gallery/<?php echo $data['filename']; ?>" class="image">
        </div>
        <?php
            // }
        ?>
    </div>

    <?php include("footer.php"); ?>

    <script>
        document.querySelectorAll('.image').forEach(image =>{
            image.onclick = () => {
                document.querySelector('.popup').classList.toggle('active');
                document.querySelector('.large-image').src = image.getAttribute('src');
            }
        });

        document.querySelector('.close-btn').onclick = () => {
            document.querySelector('.popup').classList.toggle('active');
        }
    </script>
</body>
</html>