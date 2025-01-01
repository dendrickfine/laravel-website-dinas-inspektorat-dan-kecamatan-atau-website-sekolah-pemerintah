<br>
<div class="footer p-4 d-flex flex-column justify-content-center align-items-center" style="margin-left:10px; margin-right:10px; margin-bottom:10px;border-radius:30px;background-color: #759cc9;">
    <div class="row w-100 d-flex justify-content-center align-items-start">
        <div class="col-md-6 mt-2 text-center mb-4 mb-md-0">
            <div style="font-size:25px; margin-bottom: 20px;">
                <h4 style="font-family: 'Marcellus', serif; color:#1e2c4d;">
                    <i class="fa-solid fa-location-dot"></i> INSPEKTORAT DAERAH KABUPATEN BEKASI
                </h4>
            </div>
            <div class="card" style="width:100%; height:auto; border-radius:20px; overflow:hidden;" data-aos="zoom-out">
            <div class="iframe-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2246226811185!2d107.16913927593801!3d-6.364969462266978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699bde1b8476bf%3A0xfae569ce3ee69800!2sInspektorat%20Kab.%20Bekasi!5e0!3m2!1sen!2sid!4v1717218455680!5m2!1sen!2sid" style="border:0; width: 100%; height: 250px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div style="font-size:20px; color: #1e2c4d; font-family: 'Abel', sans-serif;">
                <p><i class="fa-solid fa-building"></i> Jl. Deltamas Boulevard Sukamahi, Cikarang Pusat, Kab. Bekasi, 17530, Jawa Barat, Indonesia</p>
                <p><i class="fa-solid fa-envelope"></i> inspektorat@bekasikab.go.id</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 mt-2 text-center">
            <div style="font-size:25px; margin-top:90px; margin-bottom: 20px;">
                <h4 style="font-family: 'Marcellus', serif; color:#1e2c4d;">
                    <i class="fa-solid fa-earth-asia"></i> WILAYAH BINAAN INSPEKTORAT DAERAH KABUPATEN BEKASI
                </h4>
            </div>
            @foreach ($wilayah as $row)
            <div class="text-left custom-media">
                <div class="media-body">
                    <div class="mt-2 align-items-center">
                        <a href="#" class="details-link" data-body="{!! $row->body !!}" style="font-family: 'Abel', sans-serif; font-size:25px; color: #1e2c4d; text-decoration: underline;">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> {{ $row->judul }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Pop-up Modal -->
            <div id="popup-modal" class="popup-modal">
                <div class="popup-content text-left" style="background-color:red;">
                    <span class="close-button" id="close-button">&times;</span>
                    <p style="font-family: 'Abel', sans-serif;" id="modal-body-content"></p>
                </div>
            </div>
        </div>
    </div>
    <div id="about-us" style="margin-top:40px; margin-bottom:5px;text-align: center;">
        <a href="https://www.instagram.com/irdakabbekasi/" class="fa fa-instagram" target="_blank"></a>
        <a href="https://www.youtube.com/@inspektoratkabbekasi2363" class="fa fa-youtube" target="_blank"></a>
        <a href="mailto:inspektorat@bekasikab.go.id" class="fa fa-envelope" target="_blank"></a>
    </div>  
    <div class="text-center" style="font-family: 'Abel', sans-serif; font-size:17px; color: #1e2c4d">
            Hak Cipta © <span id="currentYear"></span> Inspektorat Daerah Kabupaten Bekasi
    </div>
</div>
