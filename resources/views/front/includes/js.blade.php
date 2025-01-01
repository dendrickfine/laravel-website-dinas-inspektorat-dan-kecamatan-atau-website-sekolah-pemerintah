<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script>
  // Mendapatkan elemen dengan id "currentYear"
  var currentYearElement = document.getElementById('currentYear');
  
  // Mendapatkan tahun saat ini
  var currentYear = new Date().getFullYear();
  
  // Mengatur teks dalam elemen "currentYear" dengan tahun saat ini
  currentYearElement.textContent = currentYear;

  // Contoh animasi scroll halus dengan JavaScript
    document.querySelector('li a[href*="#about-us"]').addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector('#about-us').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        if (window.location.hash === "#result") {
            slowScrollTo(document.querySelector('#result'), 1000);
        }
    });

    function slowScrollTo(element, duration) {
        var targetPosition = element.getBoundingClientRect().top + window.pageYOffset;
        var startPosition = window.pageYOffset;
        var distance = targetPosition - startPosition;
        var startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var run = ease(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }
        // Get the pop-up modal
    var popup = document.getElementById("popup");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close-btn")[0];

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
        popup.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }

    // Get all the "Details" buttons
    var detailButtons = document.getElementsByClassName("btn-details");

    // Add click event listener to all "Details" buttons
    for (var i = 0; i < detailButtons.length; i++) {
        detailButtons[i].addEventListener("click", function() {
            var description = this.getAttribute("data-description");
            document.getElementById("popup-description").innerText = description;
            popup.style.display = "block";
        });
    }
        // Get the modals
        var modal1 = document.getElementById("popup-modal-1");
    var modal2 = document.getElementById("popup-modal-2");

    // Get the buttons that open the modals
    var btn1 = document.getElementById("details-link-1");
    var btn2 = document.getElementById("details-link-2");

    // Get the <span> elements that close the modals
    var span1 = document.getElementById("close-button-1");
    var span2 = document.getElementById("close-button-2");

    // When the user clicks the button, open the modal 
    btn1.onclick = function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        modal1.style.display = "block";
    }
    
    btn2.onclick = function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Get the modal
        var modal = document.getElementById("popup-modal");
        var modalBodyContent = document.getElementById("modal-body-content");

        // Get the links that open the modal
        var links = document.querySelectorAll(".details-link");

        // Get the <span> element that closes the modal
        var closeButton = document.getElementById("close-button");

        // Loop through all links and attach click event
        links.forEach(function(link) {
            link.onclick = function(event) {
                event.preventDefault(); // Prevent the default anchor behavior
                var bodyContent = this.getAttribute('data-body');
                modalBodyContent.innerHTML = bodyContent; // Use innerHTML to render HTML content
                modal.style.display = "block";
            }
        });

        // When the user clicks on <span> (x), close the modal
        closeButton.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>

<style>
    /* Pop-up modal styling */
    .popup {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0,0.4); 
        padding-top: 60px; 
    }

    .close-btn {
        color: #aaa;
        float: bottom;
        font-size: 28px;
        font-weight: bold;
    }

    .close-btn:hover,
    .close-btn:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .footer .fa {
    background: white;
    color: #1e2c4d;
    padding: 10px;
    font-size: 20px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
    margin-right: 5px; /* Menambahkan margin antara ikon */
    }

    .footer .fa:hover {
    background: #1e2c4d; /* Warna latar belakang saat hover */
    color:white;
    }
    .image-container {
        display: flex;
        justify-content: center;
    }

    .image {
        max-width: 100%;
        height: auto;
        width: 570px;
        border-radius: 15px;
    }
        .custom-media {
            margin-left: 60px;
        }

    @media (max-width: 768px) { /* Anda bisa menyesuaikan lebar ini sesuai kebutuhan */
        .custom-media {
            margin-left: 10%;
        }
    }
    /* Pop-up Modal Styles */
    .popup-modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        top:0;
        font-size:20px;
        left:0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
    }
    @media (max-width: 960px) {
            #popup-modal {
                place-items: center;
                width: 200% !important; /* Override inline style */
                top: 50% !important; /* Center vertically */
                left: 50% !important; /* Center horizontally */
                transform: translate(-50%, -50%) !important; /* Adjust position to truly center */
            }
        }
    .popup-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 40%; /* Could be more or less, depending on screen size */
        border-radius: 10px;
        text-align: center;
    }
    .close-button {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close-button:hover,
    .close-button:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
