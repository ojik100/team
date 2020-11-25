
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="#"><img height="60px" width="100px" src="<?= base_url('assets/')?>lades.png" alt=""></a>
                        </div>
                        <ul>
                       
                            <li>Jalan Professor M Yamin No.35, Pancor, Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83611</li>
                            <li>Phone: +62 821-7995-9409</li>
                            <li>Email: team@elades.com</li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Tautan yang Berguna</h6>
                        <ul>
                            <li><a href="<?= base_url('tentang') ?>">Tentang kami</a></li>
                            <li><a href="https://elades.lomboktimurkab.go.id/download/">Download apk</a></li>
                        
                           
                        </ul>
                        <ul>
                     
                            <li><a href="https://hamzanwadi.ac.id/">universitas hamzanwadi</a></li>
                         
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Download aplikasi nya di bawah ini</h6>
                       
                        <form action="#">
                        <a href="https://elades.lomboktimurkab.go.id/download/"><img height="60px" width="130px" src="<?= base_url('assets/')?>app.png" alt=""></a>
                   
                        </form>
                        <div class="footer__widget__social">
                            <a target="blank" href="https://www.facebook.com/182991152051060/posts/1145590252457807/?d=n"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a target="blank" href="https://twitter.com/lades_official"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                        <div class="notification"></div>
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script><a href="https://elades.lomboktimurkab.go.id/" target="_blank"> Lades (Lapak Desa)</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="<?= base_url('assets/depan/')?>img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?= base_url('assets/depan/')?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/mixitup.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/main.js"></script>
    
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
<script>
    var token_el = $('.token');
    var error_el = $('.error');
    var message_el = $('.message');
    var notification_el = $('.notification');

    // Initialize Firebase
    // TODO: Replace with your project's customized code snippet
    var config = {
        apiKey: "AIzaSyAREK1bnRHaoPHaNYBYWw3yfnBes1jGm5I",
    authDomain: "lapak-1386a.firebaseapp.com",
    databaseURL: "https://lapak-1386a.firebaseio.com",
    projectId: "lapak-1386a",
    storageBucket: "lapak-1386a.appspot.com",
    messagingSenderId: "408365743963",
    appId: "1:408365743963:web:56bccb2fb419377a89e47e",
    measurementId: "G-XFH8X93978"
    };
    firebase.initializeApp(config);

    const messaging = firebase.messaging();
    messaging
        .requestPermission()
        .then(function () {
            message_el.html("Notification permission granted.");
            console.log("Notification permission granted.");

            // get the token in the form of promise
            return messaging.getToken();
        })
        .then(function(token) {
            token_el.html(token);
        })
        .catch(function (err) {
            error_el.html(error_el.html() + "; " + err);
            console.log("Unable to get permission to notify.", err);
        });

    messaging.onMessage(function(payload) {
        console.log("Message received. ", payload);
        notification_el.html(notification_el.html() + '<br>' + '<code>'+ JSON.stringify(payload) +'</code>');
    });
</script>

</body>

</html>
